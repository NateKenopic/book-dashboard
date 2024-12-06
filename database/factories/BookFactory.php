<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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

        $title = fake()->paragraph(1);
        $author = fake()->name();
        $publisher = fake()->company();
        $isbn = fake()->isbn13();
        $cover_image = fake()->imageUrl();
        $description = fake()->paragraph();

        return [
            'title' => $title,
            'author' => $author,
            'publisher' => $publisher,
            'isbn' => $isbn,
            'cover_image' => $cover_image,
            'description' => $description,
        ];
    }
}
