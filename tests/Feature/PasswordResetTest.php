<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PasswordResetTest extends TestCase
{
	use RefreshDatabase;

	public function test_password_page_is_accessible()
	{
		$response = $this->get(route('view.reset', ['locale' => app()->getLocale()]));
		$response->assertSuccessful();
		$response->assertViewIs('main.guest.reset');
	}

	public function test_password_reset_should_give_us_error_if_email_doesnt_exists()
	{
		$response = $this->post(
			route('password.reset.link', ['locale' => app()->getLocale()]),
			[
				'email' => 'temso@redberry.ge',
			]
		);

		$response->assertSessionHasErrors(['email']);
	}

	public function test_password_reset_should_give_us_error_if_email_is_not_provided()
	{
		$response = $this->post(
			route('password.reset.link', ['locale' => app()->getLocale()]),
		);

		$response->assertSessionHasErrors(['email']);
	}

	public function test_password_reset_should_give_us_error_if_email_format_is_not_valid()
	{
		$response = $this->post(
			route('password.reset.link', ['locale' => app()->getLocale()]),
			[
				'email' => 'temoredberry.ge',
			]
		);

		$response->assertSessionHasErrors(['email']);
	}

	public function test_password_reset_check_if_it_is_a_valid_email_and_redirect_to_notification_view()
	{
		$email = 'temo@redberry.ge';

		User::factory()->create(
			[
				'email' => $email,
			]
		);

		$response = $this->post(
			route('password.reset.link', ['locale' => app()->getLocale()]),
			[
				'email' => $email,
			]
		);

		$response->assertSessionDoesntHaveErrors(['email']);
		$response->assertViewIs('email.confirm-password');
	}

	public function test_password_reset_check_if_it_a_valid_token_for_password_reset_and_show_password_reset_view()
	{
		$email = 'temo@redberry.ge';
		$token = Str::random(64);

		DB::table('password_resets')->insert([
			'email'      => $email,
			'token'      => $token,
		]);

		$response = $this->get(route('view.password.reset', ['locale' => app()->getLocale(), 'email' => $email, 'token' => $token]));
		$response->assertSuccessful();
		$response->assertViewIs('main.guest.reset-password');
	}

	public function test_password_reset_check_if_token_doesnt_exists_after_user_updates_password_and_show_notification_view()
	{
		$email = 'temo@redberry.ge';
		$token = Str::random(64);

		$response = $this->get(route('view.password.reset', ['locale' => app()->getLocale(), 'token' => $token, 'email' => $email]));
		$response->assertViewIs('password.already-updated');
	}

	public function test_password_reset_check_should_give_us_error_if_password_length_is_less_than_3()
	{
		$email = 'temo@redberry.ge';
		$token = Str::random(64);
		$password = 'te';
		$confirmPassword = 'te';

		$response = $this->post(
			route('password.update', ['locale' => app()->getLocale(), 'email' => $email, 'token' => $token]),
			[
				'password'         => $password,
				'confirm_password' => $confirmPassword,
			]
		);

		$response->assertSessionHasErrors(['password']);
	}

	public function test_password_reset_check_should_give_us_error_if_password_and_confirm_password_input_is_not_provided()
	{
		$email = 'temo@redberry.ge';
		$token = Str::random(64);

		$response = $this->post(
			route('password.update', ['locale' => app()->getLocale(), 'email' => $email, 'token' => $token]),
		);

		$response->assertSessionHasErrors(['password', 'confirm_password']);
	}

	public function test_password_reset_check_should_give_us_error_if_password_doesnt_match()
	{
		$email = 'temo@redberry.ge';
		$token = Str::random(64);

		$response = $this->post(
			route('password.update', ['locale' => app()->getLocale(), 'email' => $email, 'token' => $token]),
			[
				'password'         => 'password',
				'confirm_password' => 'pass',
			]
		);

		$response->assertSessionHasErrors(['confirm_password']);
	}

	public function test_password_reset_check_successfully_updated_password_and_get_notification_view()
	{
		$email = 'temo@redberry.ge';
		$token = Str::random(64);
		$password = 'password';
		$confirmPassword = 'password';

		User::factory()->create(
			[
				'email' => $email,
			]
		);

		$response = $this->post(
			route('password.update', ['locale' => app()->getLocale(), 'email' => $email, 'token' => $token]),
			[
				'password'         => $password,
				'confirm_password' => $confirmPassword,
			]
		);

		$response->assertViewIs('password.updated-password');
	}
}
