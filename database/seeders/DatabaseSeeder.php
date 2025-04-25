<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Series;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\LibraryFactory;
use Database\Factories\SeriesFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->count(30)->create();

        Series::factory()->count(5)->create();

//        LibraryFactory::factory()->count(5)->create();

        Book::factory()->count(50)->create();

        Category::factory()->count(8)->create();

        Author::factory()->count(35)->create();


    }
}
