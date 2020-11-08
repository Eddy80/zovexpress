<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userid');
            $table->integer('shopid');
            $table->integer('catid');
            $table->integer('genderid');
            $table->string('title');
            $table->string('description');
            $table->integer('avgstarscount');
            $table->integer('commentcount');
            $table->integer('ordercount');
            $table->double('price');
            $table->double('pricemany');
            $table->double('additionaldiscountpercent');
            $table->integer('additionaldiscountpercentcount');
            $table->integer('totalcount');
            $table->string('instagramlink');
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
        Schema::dropIfExists('goods');
    }
}
