<?php

use Illuminate\Database\Seeder;
use App\Book;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book([
            'title' => '1984',
            'author' => 'George Orwell',
            'price' => '7.99',
            'description' => 'A dystopian novel published in 1949 by English author George Orwell. The novel is set in the year 1984 when most of the world population have become victims of perpetual war, omnipresent government surveillance and propaganda.'
            ]);
        $book->save();
        $book->genres()->sync([1]);

        $book = new Book([
            'title' => 'World War Z',
            'author' => 'Max Brooks',
            'price' => '8.99',
            'description' => 'A collection of individual accounts narrated by an agent of the United Nations Postwar Commission, following the devastating global conflict against the zombie plague.'
        ]);
        $book->save();
        $book->genres()->sync([1, 2]);

        $book = new Book([
            'title' => 'Animal Farm',
            'author' => 'George Orwell',
            'price' => '6.99',
            'description' => 'A short novel by George Orwell written during World War II and published in 1945. It is about a group of farm animals who rebel against their farmer. They hope to create a place where the animals can be equal, free, and happy.'
        ]);
        $book->save();
        $book->genres()->sync([1]);

        $book = new Book([
            'title' => 'The Hobbit',
            'author' => 'J.R.R. Tolkein',
            'price' => '7.99',
            'description' => 'Now recognized as a timeless classic, this introduction to the hobbit Bilbo Baggins, the wizard Gandalf, Gollum, and the spectacular world of Middle-earth recounts of the adventures of a reluctant hero, a powerful and dangerous ring, and the cruel dragon Smaug the Magnificent.'
        ]);
        $book->save();
        $book->genres()->sync([1, 4]);

        $book = new Book([
            'title' => 'The Martian',
            'author' => 'Andy Weir',
            'price' => '8.99',
            'description' => "Six days ago, astronaut Mark Watney became one of the first people to walk on Mars. Now, he's sure he'll be the first person to die there."
        ]);
        $book->save();
        $book->genres()->sync([1, 2]);

        $book = new book([
            'title' => 'Bossypants',
            'author' => 'Tina Fey',
            'price' => '9.99',
            'description' => 'Before Liz Lemon, before "Weekend Update," before "Sarah Palin," Tina Fey was just a young girl with a dream: a recurring stress dream that she was being chased through a local airport by her middle-school gym teacher. She also had a dream that one day she would be a comedian on TV.'
        ]);
        $book->save();
        $book->genres()->sync([3]);

    }
}
