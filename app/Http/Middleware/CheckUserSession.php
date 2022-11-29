<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserSession
{
	public function handle(Request $request, Closure $next)
	{
		if (Auth::user())
		{
			if (now()->diffInMinutes(session('lastActivityTime')) == config('session.lifetime'))
			{
				auth()->logout();
				return redirect()->route('login');
			}
		}
		return $next($request);
	}
}
