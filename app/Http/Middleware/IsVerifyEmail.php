<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsVerifyEmail
{
	public function handle(Request $request, Closure $next)
	{
		if (Auth::user())
		{
			if (!Auth::user()->is_email_verified)
			{
				auth()->logout();
				return redirect()->route('signup');
			}
		}
		return $next($request);
	}
}
