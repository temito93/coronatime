<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StatisticFactory extends Factory
{
	public function definition()
	{
		return [
			'country'                   => fake()->name(),
			'new_cases'                 => fake()->randomNumber(),
			'deaths'                    => fake()->randomNumber(),
			'recovered'                 => fake()->randomNumber(),
		];
	}
}
