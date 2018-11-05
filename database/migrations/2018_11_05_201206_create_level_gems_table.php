<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelGemsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        Schema::create('level_gems', function (Blueprint $table) {
            $table->increments('id');  
            $table->unsignedInteger('gem_id')   ;   
            $table->unsignedInteger('level_id')   ;   
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
         Schema::dropIfExists('level_gems');
    }

}

