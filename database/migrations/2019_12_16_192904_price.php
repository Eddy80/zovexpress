<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Price extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('from_country_id');
            $table->double('weight'); // kq
            $table->integer('to_country_id');

            $table->double('price_usd');
            $table->double('price_azn');
            $table->double('price_eur');
            $table->double('price_rub');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price');
    }
}
