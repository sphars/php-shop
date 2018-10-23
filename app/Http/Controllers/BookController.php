<?php

namespace App\Http\Controllers;

use App\Book;
use App\Genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //action
    public function getIndex(){
        $books = Book::orderBy('title', 'asc')->paginate(3);
        return view('books.index', ['books' => $books]);
    }

    public function getBook($id){
        //$book = Book::find($id);
        $book = Book::where('id', '=', $id)->with('genres')->first();
        return view('books.book', ['book' => $book]);
    }

    public function getAdminIndex(){
        $books = Book::orderBy('title', 'asc')->get();
        return view('admin.index', ['books' => $books]);
    }

    public function getAdminCreate(){
        $genres = Genre::all();
        return view('admin.create', ['genres' => $genres]);
    }

    public function getAdminEdit($id){
        //$book = Book::find($id);
        $book = Book::where('id', '=', $id)->first();
        $genres = Genre::all();
        return view('admin.edit', ['book' => $book, 'bookId' => $id, 'genres' => $genres]);
    }

    public function postAdminCreate(Request $request){
        $this->validate($request, [
            'title' => 'required|min:1',
            'author' => 'required|min:5',
            'price' => 'required',
            'description' => 'required|min:10'
        ]);
        $book = new Book([
            'title' =>  $request->input('title'),
            'author' => $request->input('author'),
            'description' => $request->input('description'),
            'price' => $request->input('price')
        ]);
        $book->save();
        $book->genres()->attach($request->input('genres') === null ? [] : $request->input('genres'));

        return redirect()->route('admin.index')->with('info', $book->title . ' created.');
    }

    public function postAdminUpdate(Request $request){
        $this->validate($request, [
            'title' => 'required|min:1',
            'author' => 'required|min:5',
            'price' => 'required',
            'description' => 'required|min:10'
        ]);
        $book = new Book();
        $book = Book::find($request->input('id'));

        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->price = $request->input('price');
        $book->description = $request->input('description');
        $book->genres()->sync($request->input('genres') === null ? [] : $request->input('genres'));
        $book->save();
        return redirect()->route('admin.index')->with('info', $book->title . ' updated.');
    }

    public function getAdminDelete($id){
        $book = Book::find($id);

        //delete other associated tables values here
        $book->genres()->detach();
        $book->delete();
        return redirect()->route('admin.index')->with('info', $book->title . ' deleted.');
    }
}
