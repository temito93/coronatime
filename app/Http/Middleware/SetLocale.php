<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class SetLocale
{
	public function handle(Request $request, Closure $next)
	{
		app()->setLocale($request->segment(1));

		if (app()->getLocale() == 'en' || app()->getLocale() == 'ge')
		{
			app()->setLocale($request->segment(1));
			URL::defaults(['locale' => $request->segment(1)]);
			return $next($request);
		}
		else
		{
			return redirect()->route('login', ['locale' => 'en']);
		}
	}
}
