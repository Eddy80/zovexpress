<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Country extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('name');
            $table->string('nameru');
            $table->string('nameen');

            $table->string('shortname')->nullable();

            $table->string('avatar')->nullable();

            $table->string('info');
            $table->string('inforu');
            $table->string('infoen');

            $table->string('type'); // 1 only from, 2 only to, 0 - both

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
