<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('books', 'BooksApiController@index'); //get all books
Route::get('books/{id}', 'BooksApiController@show'); //get a specific book
Route::post('books', 'BooksApiController@store'); //store a book
Route::put('books/{book}', 'BooksApiController@update'); //update a book
Route::delete('books/{book}', 'BooksApiController@delete'); //delete a book
Route::post('books/{id}', 'BooksApiController@storebook'); //handle putting a book
Route::any('errors', 'BooksApiController@errors'); //handle any errors

Route::apiResource('genres', 'GenresApiController'); //route for genre api calls
