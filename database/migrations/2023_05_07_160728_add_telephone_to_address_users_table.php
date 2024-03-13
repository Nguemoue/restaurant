<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTelephoneToAddressUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('address_users', function (Blueprint $table) {
            $table->string("telephone",30);
            $table->string("code_telephone",20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('address_users', function (Blueprint $table) {
            $table->dropColumn("telephone");
            $table->dropColumn("code_telephone");
        });
    }
}
