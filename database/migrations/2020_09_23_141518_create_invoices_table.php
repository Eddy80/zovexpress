<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('countryid');
            $table->string('personalCode');
            $table->string('promoCode');
            $table->string('description');
            $table->string('link');
            $table->string('size');
            $table->string('color');
            $table->integer('count');
            $table->double('price');
            $table->double('lastPrice');
            $table->integer('isExpress');
            $table->integer('status'); //0 - default (not finished), 1 - v korzine, 2 ordered
            $table->integer('userid');
            $table->bigInteger('trackingid');
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
        Schema::dropIfExists('invoices');
    }
}
