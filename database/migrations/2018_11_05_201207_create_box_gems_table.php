<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxGemsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        Schema::create('box_gems', function (Blueprint $table) {
            $table->increments('id');  
            $table->unsignedInteger('gem_id')   ;   
            $table->unsignedInteger('box_id')   ;   
            $table->date('create_at')->nullable()   ;   
            $table->date('updated_at')->nullable()   ;   
            $table->date('deleted_at')->nullable()   ;   
            
            $table->timestamps();
            $table->string('slug'); 
            $table->softDeletes();
            $table->unique('slug');

            
            $table->foreign('gem_id')
            ->references('id')
            ->on('gems')
            ->onDelete('cascade');
            $table->foreign('box_id')
            ->references('id')
            ->on('boxes')
            ->onDelete('cascade'); 

     });
    }
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
         Schema::dropIfExists('box_gems');
    }

}

