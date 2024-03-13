<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('address_users', function (Blueprint $table) {
            $table->foreignId("user_id")->nullable()->constrained()->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::table('address_users', function (Blueprint $table) {
            $table->dropConstrainedForeignId("user_id");
        });
    }
};
