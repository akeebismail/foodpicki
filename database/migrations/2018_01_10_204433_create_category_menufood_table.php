<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryMenufoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('category_menu_food_table',function (Blueprint $blueprint){
            $blueprint->increments('id')->unsigned();
            $blueprint->integer('menufood_id')->unsigned();
            $blueprint->integer('category_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('category_menufood');
    }
}
