<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGemSightingsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        Schema::create('gem_sightings', function (Blueprint $table) {
            $table->increments('id');  
            $table->unsignedInteger('gem_id')   ;   
            $table->unsignedInteger('player_id')   ;   
            $table->string('founded_at')   ;   
            $table->double('lat')   ;   
            $table->double('lng')   ;   
            $table->date('create_at')->nullable()   ;   
            $table->date('updated_at')->nullable()   ;   
            $table->date('deleted_at')->nullable()   ;   
            
            $table->timestamps(); 
            $table->softDeletes();

            

     });
    }
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
         Schema::dropIfExists('gem_sightings');
    }

}

