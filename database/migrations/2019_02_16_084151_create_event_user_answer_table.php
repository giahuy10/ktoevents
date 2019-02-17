<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventUserAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_user_answer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_user_id');
            $table->integer('question_id');
            $table->string('question_name');
            $table->integer('answer_id');
            $table->string('answer_name');
            $table->integer('is_correct');
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
        Schema::dropIfExists('event_user_answer');
    }
}
