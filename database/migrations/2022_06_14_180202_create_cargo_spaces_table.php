<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargoSpacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo_spaces', function (Blueprint $table) {
            $table->id();
            $table->integer('height');
            $table->integer('width');
            $table->integer('length');
            $table->foreignId('vehicle_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargo_spaces');
    }
}
