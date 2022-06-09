<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_result', function (Blueprint $table) {
            $table->bigIncrements('quiz_result_id');
            $table->string('total_mark');
            $table->string('earn_mark');
            $table->string('precentage');
            $table->string('status');
            $table->Integer('quize_id')->unsigned();
            $table->foreign('quize_id')->references('quize_id')->on('quizes')->onDelete('cascade');
            $table->bigInteger('author')->unsigned();
            $table->foreign('author')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('quiz_result');
    }
}
