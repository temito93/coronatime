<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserSession
{
	public function handle(Request $request, Closure $next)
	{
		if (now()->diffInMinutes(session('lastActivityTime')) == config('session.lifetime'))
		{
			auth()->logout();
			return redirect()->route('login');
		}
		return $next($request);
	}
}
