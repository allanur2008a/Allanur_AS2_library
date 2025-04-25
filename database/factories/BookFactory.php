<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use App\Models\Series;
use Illuminate\Database\Eloquent\Factories\Factory;
use PharIo\Manifest\Library;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $category = Category::InRandomOrder()->first();
        $author = Author::InRandomOrder()->first();
        $series = Series::InRandomOrder()->first();
        return [

            'category_id' => $category->id,
            'author_id' => $author->id,
            'series_id' => $series->id,
            'title' => $this->faker->sentence(),
            'pages' => $this->faker->numberBetween(50, 500),
            'publication_year' => $this->faker->year,
            'image' => $this->faker->imageUrl(),
        ];
    }
}
