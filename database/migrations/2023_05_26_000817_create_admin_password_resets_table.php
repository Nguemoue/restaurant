<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	public function up()
	{
		Schema::create('admin_password_resets', function (Blueprint $table) {
			$table->id();
			$table->string('email')->index();
			$table->string('token');
			$table->timestamp('created_at')->nullable();
		});
	}

	public function down()
	{
		Schema::dropIfExists('admin_password_resets');
	}
};
