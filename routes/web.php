<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Homepage route */
Route::get('/',[
    'uses' => 'BookController@getIndex',
    'as' => 'home'
]);

// Route::get('/', function () {
//     return view('index');
// })->name('home');

/* About page route */
Route::get('about', function(){
    return view('other.about');
})->name('about');

/* Books list page route */
Route::get('books', [
    'uses' => 'BookController@getBooksIndex',
    'as' => 'books.index'
]);

/* Single book page (get) */
Route::get('book/{id}', [
    'uses' => 'BookController@getBook',
    'as' => 'books.book'
]);

/* Admin pages group */
Route::group(['prefix' => 'admin'], function(){
    /* Admin homepage route */
    Route::get('', [
        'uses' => 'BookController@getAdminIndex',
        'as' => 'admin.index'
    ]);

    /* Admin create page (get) */
    Route::get('create', [
        'uses' => 'BookController@getAdminCreate',
        'as' => 'admin.create'
    ]);

    /* Admin create page (post) */
    Route::post('create', [
        'uses' => 'BookController@postAdminCreate',
        'as' => 'admin.create'
    ]);

    /* Admin edit page (get) */
    Route::get('edit/{id}', [
        'uses' => 'BookController@getAdminEdit',
        'as' => 'admin.edit'
    ]);

    /* Admin edit page (post) */
    Route::post('edit', [
        'uses' => 'BookController@postAdminUpdate',
        'as' => 'admin.update'
    ]);

    /* Admin delete page (get) */
    Route::get('delete/{id}',[
        'uses' => 'BookController@getAdminDelete',
        'as' => 'admin.delete'
    ]);
});

