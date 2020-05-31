<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            
            $table->id();
            $table->string('from_country');
            $table->string('to_country');
            $table->string('take_off_date');
            $table->string('take_off_time');
            $table->string('land_date');
            $table->string('land_time');
            $table->integer('seat_vip_num');
            $table->integer('vip_cost');
            $table->integer('seat_normal_num');
            $table->integer('normal_cost');
            $table->string('img');
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
        Schema::dropIfExists('flight');
    }
}
