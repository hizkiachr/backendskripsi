<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->id();
            $table->string('venue_name');
            $table->string('venue_picture');
            $table->string('venue_location');
            $table->string('venue_street');
            $table->string('venue_address1');
            $table->string('venue_address2');
            $table->integer('venue_price');
            $table->integer('venue_facility');
            $table->integer('venue_capacity');
            $table->integer('venue_roomspace');
            $table->text('venue_description');
            $table->text('venue_facility_list');
            $table->integer('venue_kind');
            $table->string('venue_socmed1')->nullable();
            $table->string('venue_socmed2')->nullable();
            $table->string('venue_website')->nullable();
            $table->string('venue_contact')->nullable();
            $table->integer('venue_decoration');
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
        Schema::dropIfExists('venues');
    }
}
