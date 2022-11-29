<?php

namespace App\Models;

use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
	use HasTranslations;

	protected $fillable = ['country', 'new_cases', 'deaths', 'recovered'];

	public $translatable = ['country'];

	public function scopeFilter($query, array $filters)
	{
		if ($filters['search'] ?? false)
		{
			$query->where('country->en', 'like', '%' . ucwords($filters['search']) . '%')
			->orWhere('country->ka', 'like', '%' . ucwords($filters['search']) . '%');
		}
	}
}
