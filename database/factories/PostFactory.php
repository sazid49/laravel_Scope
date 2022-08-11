<?php

namespace Database\Factories;

use Str;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->paragraph(1),
            'body'=> $this->faker->paragraph(5),
            'user_id'=>User::get()->random()->id,
            'status'=> mt_rand(0,1),
        ];
    }
}
