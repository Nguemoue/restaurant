<?php

namespace Database\Factories;

use App\Models\SuperAdministrateur;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class SuperAdministrateurFactory extends Factory
{
    protected $model = SuperAdministrateur::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->freeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt("password"),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
