<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\UserVerify;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
	use RefreshDatabase;

	public function test_check_if_signup_page_is_accessible()
	{
		$response = $this->get(route('view.signup', ['locale' => app()->getLocale()]));
		$response->assertSuccessful();
		$response->assertViewIs('main.guest.register');
	}

	public function test_registration_should_give_us_error_if_username_input_is_not_provided()
	{
		$response = $this->post(
			route('signup', ['locale' => app()->getLocale()]),
			[
				'email'            => 'temo@redberry.ge',
				'password'         => 'password',
				'confirm_password' => 'password',
			]
		);
		$response->assertSessionHasErrors(['username']);
		$response->assertSessionDoesntHaveErrors(['email', 'password', 'confirm_password']);
	}

	public function test_registration_should_give_us_error_if_email_input_is_not_provided()
	{
		$response = $this->post(
			route('signup', ['locale' => app()->getLocale()]),
			[
				'username'         => 'temito',
				'password'         => 'password',
				'confirm_password' => 'password',
			]
		);
		$response->assertSessionHasErrors(['email']);
		$response->assertSessionDoesntHaveErrors(['username', 'password', 'confirm_password']);
	}

	public function test_registration_should_give_us_error_if_password_input_is_not_provided()
	{
		$response = $this->post(
			route('signup', ['locale' => app()->getLocale()]),
			[
				'email'            => 'temo@redberry.ge',
				'username'         => 'temito',
				'confirm_password' => 'password',
			]
		);
		$response->assertSessionHasErrors(['password']);
		$response->assertSessionDoesntHaveErrors(['email', 'username']);
	}

	public function test_registration_should_give_us_error_if_confirm_password_input_is_not_provided()
	{
		$response = $this->post(
			route('signup', ['locale' => app()->getLocale()]),
			[
				'email'            => 'temo@redberry.ge',
				'username'         => 'temito',
				'password'         => 'password',
			]
		);
		$response->assertSessionHasErrors(['confirm_password']);
		$response->assertSessionDoesntHaveErrors(['email', 'username']);
	}

	public function test_registration_should_give_us_error_if_username_is_less_than_three()
	{
		$response = $this->post(
			route('signup', ['locale' => app()->getLocale()]),
			[
				'username'         => 'te',
				'email'            => 'temo@redberry.ge',
				'password'         => 'password',
				'confirm_password' => 'password',
			]
		);

		$response->assertSessionHasErrors(['username']);
		$response->assertSessionDoesntHaveErrors(['email', 'password', 'confirm_password']);
	}

	public function test_registration_should_give_us_error_if_username_is_not_unique()
	{
		User::factory()->create(
			[
				'username' => 'temo',
			]
		);

		$response = $this->post(
			route('signup', ['locale' => app()->getLocale()]),
			[
				'username'         => 'temo',
				'email'            => 'temo@redberry.ge',
				'password'         => 'password',
				'confirm_password' => 'password',
			]
		);

		$response->assertSessionHasErrors(['username']);
		$response->assertSessionDoesntHaveErrors(['email', 'password', 'confirm_password']);
	}

	public function test_registration_should_give_us_error_if_email_is_not_valid()
	{
		$response = $this->post(
			route('signup', ['locale' => app()->getLocale()]),
			[
				'username'         => 'temo',
				'email'            => 'temoredberry.ge',
				'password'         => 'password',
				'confirm_password' => 'password',
			]
		);

		$response->assertSessionHasErrors(['email']);
		$response->assertSessionDoesntHaveErrors(['username', 'password', 'confirm_password']);
	}

	public function test_registration_should_give_us_error_if_email_is_not_unique()
	{
		User::factory()->create(
			[
				'email' => 'temo@redberry.ge',
			]
		);

		$response = $this->post(
			route('signup', ['locale' => app()->getLocale()]),
			[
				'username'         => 'temo',
				'email'            => 'temo@redberry.ge',
				'password'         => 'password',
				'confirm_password' => 'password',
			]
		);

		$response->assertSessionHasErrors(['email']);
		$response->assertSessionDoesntHaveErrors(['username', 'password', 'confirm_password']);
	}

	public function test_registration_should_give_us_error_if_password_is_less_than_three()
	{
		$response = $this->post(
			route('signup', ['locale' => app()->getLocale()]),
			[
				'username'         => 'temo',
				'email'            => 'temo@redberry.ge',
				'password'         => 'pa',
				'confirm_password' => 'pa',
			]
		);

		$response->assertSessionHasErrors(['password']);
		$response->assertSessionDoesntHaveErrors(['username', 'emai']);
	}

	public function test_registration_should_give_us_error_if_password_doesnt_match()
	{
		$response = $this->post(
			route('signup', ['locale' => app()->getLocale()]),
			[
				'username'         => 'temo',
				'email'            => 'temo@redberry.ge',
				'password'         => 'password',
				'confirm_password' => 'pass',
			]
		);

		$response->assertSessionHasErrors(['confirm_password']);
		$response->assertSessionDoesntHaveErrors(['username', 'email']);
	}

	public function test_registration_should_show_notification_of_verification_link_sent_after_successfully_sign_up()
	{
		$response = $this->post(
			route('signup', ['locale' => app()->getLocale()]),
			[
				'username'         => 'temo',
				'email'            => 'temo@redberry.ge',
				'password'         => 'password',
				'confirm_password' => 'password',
			]
		);

		$response->assertViewIs('email.confirmation');
	}

	public function test_check_if_it_a_valid_token_for_email_verification_and_show_notification_view()
	{
		$user = User::factory()->create(
			[
				'username'          => 'temo',
				'email'             => 'temo@redberry.ge',
				'password'          => 'password',
				'email_verified_at' => null,
			]
		);

		$token = Str::random(65);

		UserVerify::factory()->create(
			[
				'user_id' => $user->id,
				'token'   => $token,
			]
		);

		$response = $this->get(
			route('user.verify', ['locale' => app()->getLocale(), 'token' => $token])
		);
		$response->assertSuccessful();
		$response->assertViewIs('email.account-confirmed');
	}

	public function test_check_if_it_isnt_a_valid_token_for_verification_email_and_show_notification_view()
	{
		User::factory()->create(
			[
				'username'          => 'temo',
				'email'             => 'temo@redberry.ge',
				'password'          => 'password',
				'email_verified_at' => now(),
			]
		);

		$response = $this->get(route('user.verify', ['locale' => app()->getLocale(), 'token' => Str::random(65)]));

		$response->assertViewIs('email.already-confirmed');
	}
}
