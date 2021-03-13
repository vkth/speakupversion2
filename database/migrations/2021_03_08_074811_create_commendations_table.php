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
            $table->date('date');
            $table->time('time');
            $table->text('narrative');
            $table->string('file');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('body_plate');
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
