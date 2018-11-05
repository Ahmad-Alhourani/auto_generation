<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        Schema::create('boxes', function (Blueprint $table) {
            $table->increments('id');  
            $table->string('name')   ;   
            $table->string('description')->nullable()   ;   
            $table->Integer('clickable_radius')   ;   
            $table->date('create_at')->nullable()   ;   
            $table->date('updated_at')->nullable()   ;   
            $table->date('deleted_at')->nullable()   ;   
            
            $table->timestamps();
            $table->string('slug'); 
            $table->softDeletes();
            $table->unique('slug');

             

     });
    }
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
         Schema::dropIfExists('boxes');
    }

}

