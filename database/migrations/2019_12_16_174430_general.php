<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class General extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->text('text');
            $table->text('textru');
            $table->text('texten');

            $table->string('shortname')->nullable();
            $table->string('shortnameru')->nullable();
            $table->string('shortnameen')->nullable();

            $table->integer('categoryid')->nullable();
            $table->integer('type')->nullable();

            $table->string('avatar')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generals');
    }
}
