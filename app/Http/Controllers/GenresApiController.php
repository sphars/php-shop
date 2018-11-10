<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class GenresApiController extends Controller
{
    //get all genres
    public function index()
    {
        return response()->json(Genre::get(), 200);
    }

    public function create()
    {

    }

    //store a new genre
    public function store(Request $request)
    {
        return response()->json(Genre::create($request->all()), 201);
    }

    //get a specific genre
    public function show(Genre $genre)
    {
        return response()->json($genre, 200);
    }

    public function edit(Genre $genre)
    {
        //
    }

    //update a specific genre
    public function update(Request $request, Genre $genre)
    {
        return response()->json($genre->update($request->all()), 200);
    }

    //delete a specific genre
    public function destroy(Genre $genre)
    {
        return response()->json($genre->delete(), 204);
    }
}
