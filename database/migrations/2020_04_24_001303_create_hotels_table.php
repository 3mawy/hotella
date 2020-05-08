<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigInteger('id')->unique();
            $table->string('name');
            $table->string('motto')->nullable();
            $table->string('thumbnail_url')->nullable();
            $table->bigInteger('star_rating')->nullable();
            $table->string('address');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->bigInteger('zipcode')->nullable();
            $table->string('phone_number')->nullable();


            $table->foreignId('destination_id');


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
        Schema::dropIfExists('hotels');
    }
}
