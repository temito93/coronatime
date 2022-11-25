<?php

namespace App\Models;

use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
	use HasTranslations;

	protected $fillable = ['country', 'new_cases', 'deaths', 'recovered'];

	public $translatable = ['country'];
}
