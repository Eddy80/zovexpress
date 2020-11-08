<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('good_shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('titleru');
            $table->string('titleen');
            $table->string('titlech');
            $table->string('titlekz');
            $table->string('titlekg');
            $table->string('titletr');
            $table->string('titletc');
            $table->integer('ownerid');
            $table->string('shoplogotip');
            $table->string('instagramlink');
            $table->string('facebooklink');
            $table->string('web');
            $table->string('phone');
            $table->string('phone2');
            $table->string('email');
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
        Schema::dropIfExists('good_shops');
    }
}
