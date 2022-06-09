<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprenuersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprenuers', function (Blueprint $table) {
            $table->bigIncrements('ent_id');
            $table->Biginteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('phone_number')->nullable();
            $table->string('country')->nullable();
            $table->string('province')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('business_role')->nullable();
            $table->string('current_status')->nullable();
            $table->string('education_level')->nullable();
            $table->string('field_of_experince')->nullable();
            $table->string('employer')->nullable();
            $table->string('position')->nullable();
            $table->string('year_of_expirence')->nullable();
            $table->string('incubation_program')->nullable();
            $table->string('goal_of_join')->nullable();
            $table->string('how_did_hear_about_us')->nullable();
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
        Schema::dropIfExists('entreprenuers');
    }
}
