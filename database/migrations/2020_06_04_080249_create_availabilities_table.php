<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('availabilities', function (Blueprint $table) {
            $table->id();
            $table->dateTimeTz('time');
            $table->boolean('open_home')->default(false);
            $table->boolean('booked')->default(false);
            $table->integer('total_people')->default(0);
            $table->morphs('available');
            $table->timestamps();

            $table->unique(['time', 'available_id', 'available_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('availabilities');
    }
}
