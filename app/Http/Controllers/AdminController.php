<?php

namespace App\Http\Controllers;

use App\Models\Statistic;

class AdminController extends Controller
{
	public function show()
	{
		$statisticsAll = Statistic::class;

		return view('main.by-country', [
			'statistics' => $statisticsAll::all(),
			'recovered'  => number_format($statisticsAll::sum('recovered')),
			'deaths'     => number_format($statisticsAll::sum('deaths')),
			'newCases'   => number_format($statisticsAll::sum('new_cases')),
		]);
	}

	public function sort()
	{
		$statisticsAll = Statistic::class;

		return view('main.by-country', [
			'statistics' => $statisticsAll::filter(request(['search', 'country']))->orderBy(request('sort'), request('by'))->get(),
			'recovered'  => number_format($statisticsAll::sum('recovered')),
			'deaths'     => number_format($statisticsAll::sum('deaths')),
			'newCases'   => number_format($statisticsAll::sum('new_cases')),
		]);
	}

	public function filter()
	{
		$statisticsAll = Statistic::class;

		return view('main.by-country', [
			'statistics' => $statisticsAll::filter(request(['search', 'country']))->get(),
			'recovered'  => number_format($statisticsAll::sum('recovered')),
			'deaths'     => number_format($statisticsAll::sum('deaths')),
			'newCases'   => number_format($statisticsAll::sum('new_cases')),
		]);
	}
}
