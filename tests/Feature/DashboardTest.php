<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DashboardTest extends TestCase
{
	use RefreshDatabase;

	protected function setUp(): void
	{
		parent::setUp();
		$this->user = User::factory()->create();
	}

	public function test_user_can_access_dashboard_page()
	{
		$response = $this->actingAs($this->user)->get(route('dashboard', ['locale' =>app()->getLocale()]));
		$response->assertSuccessful();
		$response->assertViewIs('main.dashboard');
	}

	public function test_user_logout_and_redirect_to_login_page()
	{
		$response = $this->actingAs($this->user)->post(route('logout', ['locale' => app()->getLocale()]));

		$response->assertRedirectToRoute('login', ['locale' => app()->getLocale()]);
	}

	public function test_check_if_by_country_page_is_accessible()
	{
		$response = $this->actingAs($this->user)->get(route('by.country', ['locale' => app()->getLocale()]));
		$response->assertSuccessful();
		$response->assertViewIs('main.by-country');
	}

	public function test_check_if_user_can_sort_countries()
	{
		$response = $this->actingAs($this->user)->get(route('sort', ['locale' => app()->getLocale(), 'search' => request('search'), 'sort' => 'country', 'by' => request('by') == 'desc' ? 'asc' : 'desc']));

		$response->assertSuccessful();
	}

	public function test_check_if_user_can_filter_country()
	{
		$search = 'Georgia';

		$response = $this->actingAs($this->user)->get(route(
			'search',
			[
				'locale' => app()->getLocale(), 'search' => $search,
			]
		));

		$response->assertSuccessful();
		$response->assertViewIs('main.by-country');
	}
}
