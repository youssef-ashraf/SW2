<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('useflis')->onDelete('cascade');
            $table->unsignedBigInteger('flight_id');
            $table->foreign('flight_id')->references('id')->on('flights')->onDelete('cascade');
            $table->unsignedBigInteger('seat_id');
            $table->foreign('seat_id')->references('id')->on('seats')->onDelete('cascade');
            $table->string('from_country');
            $table->string('to_country');
            $table->string('take_off_date');
            $table->string('take_off_time');
            $table->string('land_date');
            $table->string('land_time');
            $table->string('cost');
            $table->string('seat_type');
            $table->string('seat_num');
          $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
