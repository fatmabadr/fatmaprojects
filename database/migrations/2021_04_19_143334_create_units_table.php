<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->unsignedInteger('city_id')->unsigned();
            $table->string('title');
            $table->unsignedInteger('user_id')->unsigned();
            $table->float('price');
            $table->float('area');
            $table->integer('noOfRooms');
            $table->text('detail'); 
            $table->string('status'); 
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
        Schema::dropIfExists('units');
    }
}
