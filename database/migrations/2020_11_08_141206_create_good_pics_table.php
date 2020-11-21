<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodPicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('good_pics', function (Blueprint $table) {
            $table->bigIncrements('id');   
            $table->integer('goodid');    
            $table->integer('ismain');
            $table->string('filename');
            $table->string('fileNamesmall');
            $table->string('path');
            $table->integer('orderid');
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
        Schema::dropIfExists('good_pics');
    }
}
