<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserVerify;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ValidateAuthRequest;
use App\Http\Requests\ValidateRegisterRequest;

class SessionController extends Controller
{
	public function check()
	{
		if (Auth::user())
		{
			return redirect()->route('dashboard', ['locale' => app()->getLocale()]);
		}
		return redirect()->route('login', ['locale' => app()->getLocale()]);
	}

	public function dashboard($locale)
	{
		app()->setLocale($locale);
		return view('main.dashboard');
	}

	public function authenticate(ValidateAuthRequest $request, $locale)
	{
		app()->setLocale($locale);
		$attributes = $request->validated();
		$login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
		$remember = request()->has('remember') ? true : false;

		$request->merge([$login_type => $request->input('login')]);

		if (auth()->attempt($request->only($login_type, 'password'), $remember))
		{
			return redirect()->route('dashboard', ['locale' => $locale]);
		}
		return redirect()->back()->withInput()->withErrors(['login' => 'Invalid credentials']);
	}

	public function store(ValidateRegisterRequest $request, $locale)
	{
		app()->setLocale($locale);
		$formFields = $request->validated();
		$formFields['password'] = bcrypt($formFields['password']);

		$user = User::create($formFields);

		$token = Str::random(65);

		UserVerify::create([
			'user_id' => $user->id,
			'token'   => $token,
		]);

		Mail::send('email.emailVerification', ['token' => $token], function ($message) use ($formFields) {
			$message->to($formFields['email']);
			$message->subject(app()->getLocale() == 'ge' ? 'პაროლის განახლება' : 'Email Verification');
		});

		return view('email.confirmation');
	}

	public function verifyAccount($locale, $token)
	{
		app()->setLocale($locale);
		$verifyUser = UserVerify::where('token', $token)->first();
		$message = 'Sorry your email cannot be identified';

		if (!is_null($verifyUser))
		{
			$user = $verifyUser->user;

			if (!$user->is_email_verified)
			{
				$verifyUser->user->is_email_verified = 1;
				$verifyUser->user->save();
			}
			DB::table('users_verify')->where(['token' => $token])->delete();
			return view('email.account-confirmed', ['locale' => $locale]);
		}
		return view('email.already-confirmed', ['locale' => $locale]);
	}
}
