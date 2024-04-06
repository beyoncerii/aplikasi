<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'synopsis' => $this->faker->paragraphs(2, true),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ];
    }
}
