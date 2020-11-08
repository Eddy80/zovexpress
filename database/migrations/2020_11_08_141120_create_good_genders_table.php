<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodGendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('good_genders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('titleru');
            $table->string('titleen');
            $table->string('titlech');
            $table->string('titlekz');
            $table->string('titlekg');
            $table->string('titletr');
            $table->string('titletc');
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
        Schema::dropIfExists('good_genders');
    }
}
