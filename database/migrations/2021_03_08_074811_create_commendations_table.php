<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommendationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commendations', function (Blueprint $table) 
        {    
            $table->bigIncrements('id');
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->text('narrative');
            $table->string('file');
            $table->enum("vehicle",["jeep", "tricycle", "taxicle", "taxi"]);
            $table->unsignedBigInteger('user_id');
            $table->string('body_plate');
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
        Schema::dropIfExists('commendations');
    }
}
