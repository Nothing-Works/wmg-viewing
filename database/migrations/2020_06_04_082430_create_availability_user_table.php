<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailabilityUserTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('availability_user', function (Blueprint $table) {
            $table->primary(['availability_id', 'user_id']);
            $table->unsignedBigInteger('availability_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('availability_id')->references('id')->on('availabilities')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('availability_user', function (Blueprint $table) {
        });
    }
}
