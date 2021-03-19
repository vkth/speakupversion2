<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) 
        {   
            $table->bigIncrements('id');
            $table->string('body_plate');
            $table->date('date');
            $table->time('time');
            $table->string('narrative');
            $table->enum("vehicle",["jeep", "tricycle", "taxicle", "taxi"]);
            $table->string('file');
            $table->unsignedBigInteger('user_id');
            $table->enum('status',["pending", "solved"] );
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
        Schema::dropIfExists('complaints');
    }
}
