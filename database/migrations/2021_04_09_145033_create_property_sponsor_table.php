<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertySponsorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('property_sponsor', function (Blueprint $table) {
        $table->unsignedBigInteger('property_id');
        $table->foreign('property_id')->references('id')->on('properties');
        $table->unsignedBigInteger('sponsor_id');
        $table->foreign('sponsor_id')->references('id')->on('sponsors');
        $table->primary(['property_id','sponsor_id']);
        $table->date('end');
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
        Schema::dropIfExists('property_sponsor');
    }
}
