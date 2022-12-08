<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
	use HasFactory;

	use HasTranslations;

	protected $fillable = ['country', 'new_cases', 'deaths', 'recovered'];

	public $translatable = ['country'];

	public function scopeFilter($query, array $filters)
	{
		if ($filters['search'] ?? false)
		{
			if (app()->getLocale() == 'en')
			{
				$query->where('country->en', 'like', '%' . ucwords($filters['search']) . '%');
			}

			if (app()->getLocale() == 'ge')
			{
				$query->where('country->ka', 'like', '%' . ucwords($filters['search']) . '%');
			}
		}
	}
}
