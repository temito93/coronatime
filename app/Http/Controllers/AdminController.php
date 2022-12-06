<?php

namespace App\Http\Controllers;

use App\Models\Statistic;

class AdminController extends Controller
{
	public function show()
	{
		$statisticsAll = Statistic::class;

		return view('main.by-country', [
			'statistics'    => $statisticsAll,
		]);
	}

	public function sort()
	{
		$statisticsAll = Statistic::class;

		return view('main.by-country', [
			'statistics'    => $statisticsAll::filter(request(['search', 'country']))->orderBy(request('sort'), request('by'))->get(),
		]);
	}

	public function filter()
	{
		$statisticsAll = Statistic::class;

		if (!request('search'))
		{
			return redirect()->route('by.country');
		}

		return view('main.by-country', [
			'statistics'    => $statisticsAll::filter(request(['search', 'country']))->get(),
		]);
	}
}
