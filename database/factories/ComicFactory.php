<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ComicFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'summary' => $this->faker->text(),
            'status' => 'ongoing',
        ];
    }
}
