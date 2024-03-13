<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('address_users', function (Blueprint $table) {
            $table->id();
            $table->string("organisation")->nullable();
            $table->foreignId("ville_id")->nullable()->constrained()->nullOnDelete();
            $table->string("quartier");
            $table->string("ville");
            $table->string("zip");
            $table->string("etat");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profile_infos');
    }
};
