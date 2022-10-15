<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('question_id')->unsigned()->index();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('like_id')->unsigned()->index();
            $table->text('body');
            $table->timestamps('time_date');

            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
