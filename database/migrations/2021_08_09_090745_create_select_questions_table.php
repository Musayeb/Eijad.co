<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('select_questions', function (Blueprint $table) {
            $table->bigIncrements('select_question_id');
            $table->integer('number');
            $table->bigInteger('question_id')->unsigned();
            $table->Integer('quize_id')->unsigned();
            $table->bigInteger('author')->unsigned();
            $table->timestamps();
            $table->foreign('question_id')->references('question_id')->on('questions')->onDelete('cascade');
            $table->foreign('quize_id')->references('quize_id')->on('quizes')->onDelete('cascade');
            $table->foreign('author')->references('id')->on('users')->onDelete('cascade');
            $table->string('question_mark');
            $table->string('earn_mark')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('select_questions');
    }
}
