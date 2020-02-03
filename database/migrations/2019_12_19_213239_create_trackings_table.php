<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('otpravka');
            $table->string('usercode');
            $table->integer('userid');
            $table->string('tracknumber');
            $table->double('kq');
            $table->string('naimenovanie');
            $table->string('sentfrom');
            $table->date('sentdate');
            $table->string('receiveto');
            $table->date('receivedate');
            $table->date('expectedreceivedate');
            $table->integer('status');

            $table->double('zakq');
            $table->double('summa');
            $table->double('sf');
            $table->double('straxovka');
            $table->double('som');
            $table->string('dostavka');
            $table->double('itoqo');

            $table->string('nowplace');
            $table->double('nowpercent');
            $table->integer('routeid');
            $table->integer('tracktype')->default(0);
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
        Schema::dropIfExists('trackings');
    }
}
