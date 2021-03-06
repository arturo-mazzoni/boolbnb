<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenityPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('amenity_property', function (Blueprint $table) {
        $table->unsignedBigInteger('property_id');
        $table->foreign('property_id')->references('id')->on('properties');
        $table->unsignedBigInteger('amenity_id');
        $table->foreign('amenity_id')->references('id')->on('amenities');
        $table->primary(['property_id','amenity_id']);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amenity_property');
    }
}
