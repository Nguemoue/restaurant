<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CategoriePlatFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word(),
            'description' => $this->faker->text(),
            'deleted_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
