<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CheckEmailRequest;
use App\Http\Requests\PasswordResetRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PasswordResetController extends Controller
{
	public function send(CheckEmailRequest $request, $locale)
	{
		app()->setLocale($locale);
		$check_email = $request->validated();

		if ($check_email)
		{
			$token = Str::random(64);

			DB::table('password_resets')->insert([
				'email'      => $check_email['email'],
				'token'      => $token,
				'created_at' => Carbon::now(),
			]);

			Mail::send('email.forgot-password', ['token' => $token, 'email' => $check_email['email'], 'locale' => $locale], function ($message) use ($check_email) {
				$message->to($check_email['email']);
				$message->subject(app()->getLocale() == 'ge' ? 'პაროლის განახლება' : 'Password Reset');
			});
			return view('email.confirm-password', ['locale' => $locale]);
		}
	}

	public function show($locale, $email, $token)
	{
		app()->setLocale($locale);
		$updatedPassword = DB::table('password_resets')->where(['email' => $email, 'token' => $token])->first();
		if (is_null($updatedPassword))
		{
			return response()->view('password.already-updated', ['locale' => $locale]);
		}
		return view('main.guest.reset-password', ['email' =>$email, 'token' => $token, 'locale' => $locale]);
	}

	public function update($locale, $email, $token, PasswordResetRequest $request)
	{
		app()->setLocale($locale);
		$validate_password = $request->validated();
		$confirm_password = request()->input('confirm_password');

		if ($validate_password['password'] == $confirm_password)
		{
			User::where('email', $email)->update(['password' => bcrypt($validate_password['password'])]);

			DB::table('password_resets')->where(['email'=> $email, 'token' => $token])->delete();

			return view('password.updated-password', ['locale' => $locale]);
		}
	}
}
