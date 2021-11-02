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
            $table->string('narrative_review');
            $table->unsignedBigInteger('ratings');
            $table->string('body_plate');
            $table->enum("vehicle",["jeep", "tricycle", "taxicle", "taxi"]);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('mobileappuser_id')->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
