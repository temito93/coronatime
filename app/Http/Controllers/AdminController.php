<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
	public function show($locale)
	{
		app()->setLocale($locale);
		return view('main.by-country');
	}
}
