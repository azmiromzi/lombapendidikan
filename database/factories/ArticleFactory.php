<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
             'title' => $this->faker->title(),
             'desc' => collect($this->faker->paragraphs(mt_rand(5,10)))
             ->map(fn($p) => "<p>$p</p>")
             ->implode(''),
             'excerpt' => $this->faker->paragraph(),
             'user_id' => mt_rand(1,3),
            //  'image' => null
        ];
    }
}
