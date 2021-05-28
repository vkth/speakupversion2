<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
            $table->string('narrative');
            $table->unsignedBigInteger('ratings');
            $table->enum("vehicle",["jeep", "tricycle", "taxicle", "taxi"]);
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->string('body_plate');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
