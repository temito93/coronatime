<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRegisterRequest extends FormRequest
{
	public function rules()
	{
		return [
			'username'         => ['required', 'min: 3', 'unique:users,username'],
			'email'            => ['required', 'email', 'unique:users,email'],
			'password'         => ['required', 'min: 3'],
			'confirm_password' => ['required', 'min: 3', 'same:password'],
		];
	}
}