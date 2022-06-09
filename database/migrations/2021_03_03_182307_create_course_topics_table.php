<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_topics', function (Blueprint $table) {
            $table->increments('topics_id');

            $table->UnsignedInteger('course_id')->nullable();
            $table->foreign('course_id')->references('course_id')->on('courses')->constrained()
            ->onDelete('RESTRICT')
            ->onUpdate('CASCADE');

            $table->string('type_of_topic')->nullable();
            $table->text('topic_descrip')->nullable();
            $table->string('study_material')->nullable();
            $table->string('topics_name')->nullable();
            $table->string('vedio_upload_id')->nullable();
            $table->string('photo_upload_id')->nullable();


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
        Schema::dropIfExists('course_topics');
    }
}
