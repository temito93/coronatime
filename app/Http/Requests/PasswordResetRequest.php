<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordResetRequest extends FormRequest
{
	public function rules()
	{
		return [
			'password'         => ['required', 'min:3'],
			'confirm_password' => ['required', 'same:password'],
		];
	}
}
