<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('course_id')->unsigned();
            $table->string('course_name');
            $table->string('course_type');
            $table->longText('course_description')->nullable();
            $table->text('course_slug')->nullable();
            $table->string('course_level')->nullable();
            $table->string('price_type')->nullable();
            $table->string('total_hours')->nullable();
            $table->string('total_lecture')->nullable();
            $table->string('course_lanuguage')->nullable();
            $table->string('last_update')->nullable();
            $table->string('course_photo')->nullable();
            $table->string('course_bio')->nullable();
            $table->string('certification')->nullable();
            $table->string('status')->nullable();
            $table->string('course_price')->nullable();
            $table->integer('author');
            $table->unsignedInteger('quiz_id')->nullabel();
            $table->foreign('quiz_id')->references('quiz_id')->on('quizes');

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
        Schema::dropIfExists('courses');
    }
}
