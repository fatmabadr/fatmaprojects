<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {
            
            $table->bigIncrements('id');

            $table->string('title');
            $table->bigIncrements('user_id')->unsigned();
            $table->float('price');
            $table->float('Property');
            $table->integer('noOfRooms');
            $table->text('detail'); 
            $table->timestamps();       
            $table->foreign('user_id')->references('id')->on('users') ->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flats');
    }
}
