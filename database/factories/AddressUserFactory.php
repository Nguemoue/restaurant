<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AddressUserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'organisation' => $this->faker->word(),
            'ville_id' => $this->faker->randomNumber(),
            'quartier' => $this->faker->word(),
            'ville' => $this->faker->word(),
            'zip' => $this->faker->postcode(),
            'etat' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
