<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuryersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuryers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('targetcountryid');
            $table->string('targetregionname');
            $table->string('personalcode');
            $table->string('targetphone1');
            $table->string('targetphone2')->is_null;
            $table->string('targetaddress');
            $table->integer('posilkacount')->is_null;
            $table->double('lastprice');
            $table->integer('userid');
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
        Schema::dropIfExists('kuryers');
    }
}
