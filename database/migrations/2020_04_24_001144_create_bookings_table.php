<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('hotel_id');
            $table->foreignId('room_id');
            $table->foreignId('user_id');
            $table->date('date_from');
            $table->date('date_to');
            $table->bigInteger('room_count');
            $table->bigInteger('booking_status_id');
            $table->bigInteger('price');
            $table->bigInteger('total');
            $table->softDeletes();
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
        Schema::dropIfExists('bookings');
    }
}
