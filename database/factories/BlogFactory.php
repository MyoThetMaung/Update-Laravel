<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Category;
use App\Models\User;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            "category_id" => Category::factory(),
            "user_id" => User::factory(),
            "title"=> $this->faker->word(),
            "intro" => $this->faker->word(),
            "body" => $this->faker->paragraph(),
            "filename" => $this->faker->slug()
        ];
    }
}
