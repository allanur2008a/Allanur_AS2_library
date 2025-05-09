<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $book = Book::InRandomOrder->first();
        $user = User::InRandomOrder->first();
        return [
            'book_id' => $book->id,
            'user_id' => $user->id,
            'method' => fake() ->betwe
        ];
    }
}
