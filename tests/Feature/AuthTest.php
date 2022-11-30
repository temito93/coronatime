<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
	use RefreshDatabase;

	public function test_login_page_is_accessible()
	{
		$response = $this->get(route('login', ['locale' => app()->getLocale()]));
		$response->assertSuccessful();
		$response->assertViewIs('main.guest.login');
	}

	public function test_auth_should_give_us_error_if_input_is_not_provided()
	{
		$response = $this->post(route('authenticate', ['locale' => app()->getLocale()]));
		$response->assertSessionHasErrors(
			[
				'login',
				'password',
			]
		);
	}

	public function test_auth_should_give_us_email_or_username_error_if_we_wont_provide_email_or_username_input()
	{
		$response = $this->post(route('authenticate', ['locale' => app()->getLocale()]), ['password' => 'password']);

		$response->assertSessionHasErrors(
			[
				'login',
			]
		);

		$response->assertSessionDoesntHaveErrors(['password']);
	}

	public function test_auth_should_give_us_password_error_if_we_wont_provide_password_input()
	{
		$response = $this->post(route('authenticate', ['locale' => app()->getLocale()]), ['login' => 'temo@redberry.ge']);
		$response->assertSessionHasErrors(
			[
				'password',
			]
		);
		$response->assertSessionDoesntHaveErrors(['login']);
	}

	public function test_auth_should_give_us_incorrect_credentials_error_when_such_user_does_not_exists()
	{
		$response = $this->post(
			route('authenticate', ['locale' => app()->getLocale()]),
			[
				'login'    => 'temo@redberry.ge',
				'password' => 'password',
			]
		);

		$response->assertSessionHasErrors(['login' => __('login.login.error')]);
	}

	public function test_auth_should_redirect_to_dashboard_after_login()
	{
		$email = 'temo@redberry.ge';
		$password = 'password';

		User::factory()->create(
			[
				'email'    => $email,
				'password' => bcrypt($password),
			]
		);

		$response = $this->post(
			route('authenticate', ['locale' => app()->getLocale()]),
			[
				'login'    => $email,
				'password' => $password,
			]
		);

		$response->assertRedirect(route('dashboard', ['locale' => app()->getLocale()]));
	}
}
