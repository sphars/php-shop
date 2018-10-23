<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre = new Genre(['name' => 'Fiction']);
        $genre->save();

        $genre = new Genre(['name' => 'Science Fiction']);
        $genre->save();

        $genre = new Genre(['name' => 'Nonfiction']);
        $genre->save();

        $genre = new Genre(['name' => 'Fantasy']);
        $genre->save();
    }
}
