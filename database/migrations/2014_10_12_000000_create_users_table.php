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
            $table->string('dni')->unique();
            $table->string('username')->default("nou usuari");
            $table->string('email');
            $table->string('name');
            $table->string('surname');
            $table->date('date');
            $table->string('bank_data')->default("No afegit");
            $table->integer('rupias')->default(0);
            $table->string('phone')->default("No afegit");
            $table->integer('rol')->unsigned()->nullable();
            $table->foreign('rol')->references('id')->on('roles');
            $table->string('password');
            $table->rememberToken();
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
