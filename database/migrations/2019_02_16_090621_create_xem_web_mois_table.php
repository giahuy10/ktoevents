<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXemWebMoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xem_web_mois', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('user_name');
            $table->string('email');
            $table->string('full_name');
            $table->string('address');
            $table->string('phone');
            $table->string('facebook');
            $table->integer('is_correct');
            $table->integer('lucky_number');
            $table->text('comment');
            $table->integer('a1');
            $table->string('a1_text');
            $table->integer('is_a1_correct');
            $table->integer('a2');
            $table->string('a2_text');
            $table->integer('is_a2_correct');
            $table->integer('a3');
            $table->string('a3_text');
            $table->integer('is_a3_correct');
            $table->integer('a4');
            $table->string('a4_text');
            $table->integer('is_a4_correct');
            $table->integer('a5');
            $table->string('a5_text');
            $table->integer('is_a5_correct');
            $table->integer('time_enter');
            $table->integer('time_start');
            $table->integer('time_submit');
            $table->string('ref');
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
        Schema::dropIfExists('xem_web_mois');
    }
}
