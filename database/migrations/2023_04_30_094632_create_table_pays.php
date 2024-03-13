<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePays extends Migration
{
    public function up()
    {
        Schema::create('pays', function (Blueprint $table) {
            $table->id();
            $table->string("code",8);
            $table->string("nom");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pays');
    }
}
