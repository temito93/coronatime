<?php

namespace App\Http\Controllers;

use App\Models\Statistic;

class AdminController extends Controller
{
	public function show()
	{
		$statistics = Statistic::all();

		$newCases = $statistics->reduce(function ($old, $cur) {
			return $old + $cur['new_cases'];
		});

		$recovered = $statistics->reduce(function ($old, $cur) {
			return $old + $cur['recovered'];
		});

		$deaths = $statistics->reduce(function ($old, $cur) {
			return $old + $cur['deaths'];
		});

		return view('main.by-country', [
			'statistics'           => $statistics,
			'newCases'             => $newCases,
			'recovered'            => $recovered,
			'deaths'               => $deaths,
		]);
	}

	public function sort()
	{
		$statisticsAll = Statistic::class;

		$statistics = $statisticsAll::all();

		$newCases = $statistics->reduce(function ($old, $cur) {
			return $old + $cur['new_cases'];
		});

		$recovered = $statistics->reduce(function ($old, $cur) {
			return $old + $cur['recovered'];
		});

		$deaths = $statistics->reduce(function ($old, $cur) {
			return $old + $cur['deaths'];
		});

		return view('main.by-country', [
			'statistics'              => $statisticsAll::filter(request(['search', 'country']))->orderBy(request('sort'), request('by'))->get(),
			'newCases'                => $newCases,
			'recovered'               => $recovered,
			'deaths'                  => $deaths,
		]);
	}

	public function filter()
	{
		$statisticsAll = Statistic::class;

		$statistics = $statisticsAll::all();

		$newCases = $statistics->reduce(function ($old, $cur) {
			return $old + $cur['new_cases'];
		});

		$recovered = $statistics->reduce(function ($old, $cur) {
			return $old + $cur['recovered'];
		});

		$deaths = $statistics->reduce(function ($old, $cur) {
			return $old + $cur['deaths'];
		});

		return view('main.by-country', [
			'statistics'              => $statisticsAll::filter(request(['search', 'country']))->get(),
			'newCases'                => $newCases,
			'recovered'               => $recovered,
			'deaths'                  => $deaths,
		]);
	}
}
