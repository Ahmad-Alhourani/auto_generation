<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxItemsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        Schema::create('box_items', function (Blueprint $table) {
            $table->increments('id');  
            $table->unsignedInteger('item_id')   ;   
            $table->unsignedInteger('box_id')   ;   
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
         Schema::dropIfExists('box_items');
    }

}

