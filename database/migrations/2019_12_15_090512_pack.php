<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pack extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pack', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('usercode');
            $table->string('trackingnumber');

            $table->date('dateofsend');
            $table->date('dateofexpect');
            $table->date('dateofaccept');

            $table->integer('percentofway');
            $table->integer('routeid');

            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pack');
    }
}
