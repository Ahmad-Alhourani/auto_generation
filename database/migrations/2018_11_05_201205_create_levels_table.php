<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
            $table->increments('id');  
            $table->string('name')   ;   
            $table->Integer('order')   ;   
            $table->date('create_at')->nullable()   ;   
            $table->date('updated_at')->nullable()   ;   
            $table->date('deleted_at')->nullable()   ;   
            $table->string('description')->nullable()   ;   
            $table->boolean('is_deleted')->nullable()   ;   
            $table->Integer('visible_radius')   ;   
            
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
         Schema::dropIfExists('levels');
    }

}

