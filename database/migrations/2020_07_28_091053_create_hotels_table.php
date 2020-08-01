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
            $table->increments('id');
            $table->foreignId('destination_id');
            $table->string('name');
            $table->smallInteger('star_rating');
            $table->string('motto');
            $table->string('address');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('city');
            $table->string('state');
            $table->smallInteger('zipcode');
            $table->bigInteger('phone_number');
            $table->string('thumbnail_url');
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
