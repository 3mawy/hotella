<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('hotel_id');
            $table->string('floor');
            $table->foreignId('room_type_id');
            $table->bigInteger('room_number');
            $table->string('name');
            $table->bigInteger('description');
            $table->bigInteger('price');
            $table->string('img');
            $table->foreignId('room_status_id');
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
        Schema::dropIfExists('rooms');
    }
}
