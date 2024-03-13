<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('categorie_plats', function (Blueprint $table) {
            $table->id();
            $table->string("nom")->unique();
            $table->text("description")->nullable();
            $table->softDeletes();
            $table->string("icon",40)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categorie_plats');
    }
};
