<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizes', function (Blueprint $table) {
            $table->increments('quize_id')->unsinged();
         
            $table->string('quize_name');
     
            $table->UnsignedInteger('course_id')->nullable();
            $table->foreign('course_id')->references('course_id')->on('courses')->constrained()
            ->onDelete('RESTRICT')
            ->onUpdate('CASCADE');
            $table->string('time');
            $table->string('quiz_total_question');
            
            $table->integer('author');
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
        Schema::dropIfExists('quizes');
    }
}
