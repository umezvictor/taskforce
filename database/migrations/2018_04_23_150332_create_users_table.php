<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 30);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->string('firstname', 100)->nullable();
            $table->string('lastname', 100)->nullable();
            $table->text('phone')->nullable();
            $table->string('skills')->nullable();
            $table->string('state', 100)->nullable();
            $table->string('town', 100)->nullable();
            $table->rememberToken('remember_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
