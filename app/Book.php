<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Genre;

class Book extends Model{

    protected $fillable = ['title', 'author', 'description', 'price'];

    public function genres(){
        return $this->belongsToMany('App\Genre', 'book_genre', 'book_id', 'genre_id')->withTimestamps();
    }

    // public function getBooks($session){
    //     if(!$session->has('books')){
    //         $this->createDummyData($session);
    //     }
    //     return $session->get('books');
    // }

    // public function getBook($session, $id){
    //     if(!$session->has('books')){
    //         $this->createDummyData($session);
    //     }
    //     return $session->get('books')[$id];
    // }

    // public function addBook($session, $title, $author, $price, $description){
    //     if(!$session->has('books')){
    //         $this->createDummyData();
    //     }
    //     $books = $session->get('books');
    //     array_push($books, [
    //         'title' => $title,
    //         'author' => $author,
    //         'price' => $price,
    //         'description' => $description
    //     ]);
    //     $session->put('books', $books);
    // }

    // public function editBook($session, $id, $title, $author, $price, $description){
    //     $books = $session->get('books');
    //     $books[$id] = [
    //         'title' => $title,
    //         'author' => $author,
    //         'price' => $price,
    //         'description' => $description
    //     ];
    //     $session->put('books', $books);
    // }


    // private function createDummyData($session){
    //     $books = [
    //         [
    //             'title' => 'World War Z',
    //             'author' => 'Max Brooks',
    //             'price' => '$8.99',
    //             'description' => 'A collection of individual accounts narrated by an agent of the United Nations Postwar Commission, following the devastating global conflict against the zombie plague.'
    //         ],
    //         [
    //             'title' => '1984',
    //             'author' => 'George Orwell',
    //             'price' => '$7.99',
    //             'description' => 'A dystopian novel published in 1949 by English author George Orwell. The novel is set in the year 1984 when most of the world population have become victims of perpetual war, omnipresent government surveillance and propaganda.'
    //         ]
    //     ];

    //     $session->put('books', $books);
    // }
}
