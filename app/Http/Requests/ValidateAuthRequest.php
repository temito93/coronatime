<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateAuthRequest extends FormRequest
{
	public function rules()
	{
		return [
			'login'    => ['required'],
			'password' => ['required'],
		];
	}
}
