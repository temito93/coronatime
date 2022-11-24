<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	public function up()
	{
		Schema::create('users_verify', function (Blueprint $table) {
			$table->id();
			$table->integer('user_id');
			$table->string('token');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('users_verify');
	}
};
