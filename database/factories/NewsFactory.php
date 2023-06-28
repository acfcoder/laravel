<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $title = $this->faker->text;
        $title = substr($title, 0, 25); // Limitar a 255 caracteres

        return [
            'title' => $title,
            'content' => $this->faker->text,
            'author' => $this->faker->name,
            'pub_date' => now(),
            'image' => "https://picsum.photos/id/" . rand(1, 300) . "/300/300"
        ];
    }
}
