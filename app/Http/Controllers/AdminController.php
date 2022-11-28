<?php

namespace App\Http\Controllers;

use App\Models\Statistic;

class AdminController extends Controller
{
	public function show()
	{
		return view('main.by-country', [
			'statistics' => Statistic::all(),
		]);
	}
}
