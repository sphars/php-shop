<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Genre extends Model
{
    protected $fillable = ['name'];

    public function books(){
        return $this->belongsToMany('Book', 'book_genre', 'genre_id', 'book_id')->withTimestamps();
    }
}
