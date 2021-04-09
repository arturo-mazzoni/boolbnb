<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title', 80);
            $table->string('rooms_number', 5);
            $table->string('beds_number', 5);
            $table->string('bathrooms_number', 5);
            $table->string('sqm_number', 5);
            $table->string('address', 255);
            $table->decimal('longitude', 11,8);
            $table->decimal('latitude', 10,8);
            $table->text('image');
            $table->boolean('visible');
            $table->float('price_per_night', 7,2);
            $table->string('floor', 5);
            $table->text('description')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
