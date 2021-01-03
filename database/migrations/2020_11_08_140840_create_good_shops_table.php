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
            $table->integer('shopcatid');
            $table->integer('shopcountryid');
            $table->string('title')->null();
            $table->string('titleru')->null();;
            $table->string('titleen')->null();;
            $table->string('titlech')->null();;
            $table->string('titlekz')->null();;
            $table->string('titlekg')->null();;
            $table->string('titletr')->null();;
            $table->string('titletc')->null();;
            $table->integer('ownerid');
            $table->string('shoplogotip')->null();;
            $table->string('instagramlink')->null();;
            $table->string('facebooklink')->null();;
            $table->string('web')->null();;
            $table->string('phone')->null();;
            $table->string('phone2')->null();;
            $table->string('email')->null();;
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
