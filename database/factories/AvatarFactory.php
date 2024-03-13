<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AvatarFactory extends Factory
{
    public function definition(): array
    {
        return [
            'photo_url' => $this->faker->url(),
            'profile_id' => $this->faker->randomNumber(),
            'profile_type' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
