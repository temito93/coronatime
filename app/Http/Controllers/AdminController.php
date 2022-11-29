<?php

namespace App\Http\Controllers;

use App\Models\Statistic;

class AdminController extends Controller
{
	public function show()
	{
		$deaths = number_format(Statistic::sum('deaths'));
		$newCases = number_format(Statistic::sum('new_cases'));
		$recovered = number_format(Statistic::sum('recovered'));

		return view('main.by-country', [
			'statistics' => Statistic::all(),
			'recovered'  => $recovered,
			'deaths'     => $deaths,
			'newCases'   => $newCases,
		]);
	}

	public function sort()
	{
		$deaths = number_format(Statistic::sum('deaths'));
		$newCases = number_format(Statistic::sum('new_cases'));
		$recovered = number_format(Statistic::sum('recovered'));

		return view('main.by-country', [
			'statistics' => Statistic::orderBy(request('sort'), request('by'))->get(),
			'recovered'  => $recovered,
			'deaths'     => $deaths,
			'newCases'   => $newCases,
		]);
	}

	public function filter()
	{
		$deaths = number_format(Statistic::sum('deaths'));
		$newCases = number_format(Statistic::sum('new_cases'));
		$recovered = number_format(Statistic::sum('recovered'));

		return view('main.by-country', [
			'statistics' => Statistic::filter(request(['search', 'country']))->get(),
			'recovered'  => $recovered,
			'deaths'     => $deaths,
			'newCases'   => $newCases,
		]);
	}
}
