<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkout_details', function (Blueprint $table) {
            $table->bigIncrements('checkout_detail_id');
            $table->string('course_name')->nullable();;
            $table->string('course_id')->nullable();
            $table->string('course_price')->nullable();
            $table->string('author')->nullable();;
            $table->bigInteger('checkout_id')->unsigned()->nullable();
            $table->foreign('checkout_id')->references('checkout_id')->on('checkouts');
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
        Schema::dropIfExists('checkout_details');
    }
}
