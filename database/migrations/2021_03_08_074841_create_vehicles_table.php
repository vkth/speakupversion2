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
            $table->bigIncrements('id');
            $table->enum("vehicle",["jeep", "tricycle", "taxicle", "taxi"]);
            $table->string('body_plate');
            $table->enum('status',["Registered", "Colorum"] );
            $table->unsignedBigInteger('operator_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('mobileappuser_id')->nullable();
            $table->unsignedBigInteger('complaint_id');
            $table->unsignedBigInteger('review_id');
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
        Schema::dropIfExists('vehicles');
    }
}
