<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('plate');
            $table->integer('year');
            $table->foreignId('fuel_type_id');
            $table->integer('doors');
            $table->integer('seats');
            $table->string('brand');
            $table->string('model');
            $table->foreignId('bodywork_type_id');
            $table->foreignId('gearbox_type_id');
            $table->string('outer_color');
            $table->string('inner_color');
            $table->string('motor');
            $table->string('description');
            $table->foreignId('vehicle_type_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
