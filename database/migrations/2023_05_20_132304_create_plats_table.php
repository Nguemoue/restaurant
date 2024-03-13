<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('plats', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->float("fake_prix",10,2)->default(0);
            $table->float("prix",10,2)->default(0);
            $table->text("description")->nullable();
            $table->foreignId("categorie_plat_id")->nullable()->constrained();
            $table->foreignId("administrateur_id")->nullable()->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('plats');
    }
};
