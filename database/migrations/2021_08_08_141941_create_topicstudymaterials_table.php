<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicstudymaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topicstudymaterials', function (Blueprint $table) {
            $table->bigIncrements('material_id');
            $table->Integer('upload_id')->unsigned();
            $table->foreign('upload_id')->references('upload_id')->on('uploads');
            $table->Integer('topics_id')->unsigned();
            $table->foreign('topics_id')->references('topics_id')->on('course_topics');
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
        Schema::dropIfExists('topicstudymaterials');
    }
}
