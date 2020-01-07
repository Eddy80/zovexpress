<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('firstname');
            $table->string('lastname');
            $table->string('surname')->nullable();

            $table->integer('country');

            $table->integer('gender')->default(0);
            $table->date('dob')->nullable();

            $table->string('phone')->nullable();
            $table->string('passport')->nullable();

            $table->string('avatar')->nullable();
            $table->string('description')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('email');//->unique(); budet na urovne php
            $table->string('password');

            $table->integer('status')->default(0);

            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}

