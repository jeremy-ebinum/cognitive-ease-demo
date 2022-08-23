<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriviaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trivia', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->unsignedSmallInteger('choice_1');
            $table->unsignedSmallInteger('choice_2');
            $table->unsignedSmallInteger('choice_3');
            $table->unsignedSmallInteger('choice_4');
            $table->unsignedSmallInteger('choice_5');
            $table->dateTime('start_time');
            $table->dateTime('finish_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trivia');
    }
}
