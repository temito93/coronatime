<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserVerifyFactory extends Factory
{
	public function definition()
	{
		return [
			'user_id' => User::factory(),
			'token'   => Str::random(65),
		];
	}
}
