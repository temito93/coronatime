<?php

namespace App\Console\Commands;

use App\Models\Statistic;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class GetStatistics extends Command
{
	protected $signature = 'command:statistics';

	protected $description = 'Get Corona Statistics';

	public function handle()
	{
		$getCountries = Http::get('https://devtest.ge/countries')->json();

		foreach ($getCountries as $country)
		{
			$everyCountry = Http::post('https://devtest.ge/get-country-statistics', ['code' => $country['code']])->json();

			Statistic::updateOrCreate(
				[
					'country->en' => $country['name']['en'],
				],
				[
					'country'              => $country['name'],
					'new_cases'            => $everyCountry['confirmed'],
					'deaths'               => $everyCountry['deaths'],
					'recovered'            => $everyCountry['recovered'],
				]
			);
		}

		return Command::SUCCESS;
	}
}
