<?php

namespace Database\Factories;

use App\Models\Administrateur;
use App\Models\CategoriePlat;
use App\Models\Plat;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlatFactory extends Factory
{
	protected $model = Plat::class;

	public function definition(): array
	{
		return [
			"categorie_plat_id" => CategoriePlat::pluck("id")->random(),
			"nom" => $this->faker->unique()->word(),
			"administrateur_id" => Administrateur::pluck("id")->random(),
			"description" => $this->faker->text(200),
			"fake_prix" => $this->faker->randomFloat(2,2,4),
			"prix" => $this->faker->randomFloat(2,2,4)
		];
	}
}
