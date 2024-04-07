<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::factory(30)->create();

        Book::each(function ($book) {
            $book->author_id = rand(1,30);
            $book->save();
        });
    }
}
