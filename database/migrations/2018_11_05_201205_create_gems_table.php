<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGemsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        Schema::create('gems', function (Blueprint $table) {
            $table->increments('id');  
            $table->string('name')   ;   
            $table->date('create_at')->nullable()   ;   
            $table->date('updated_at')->nullable()   ;   
            $table->string('description')->nullable()   ;   
            $table->boolean('is_deleted')->nullable()   ;   
            $table->Integer('radius')   ;   
            
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
         Schema::dropIfExists('gems');
    }

}

