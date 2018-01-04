<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenufoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('menufood',function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('price');
            $table->longText('description');
            $table->longText('details')->nullable();
            $table->longText('nutrition_info');
            $table->longText('prep_methods');
            $table->string('weight');
            $table->string('calories');
            $table->text('ingredients');
            $table->double('discount')->default(0);
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
        //
        Schema::dropIfExists('menufood');
    }
}
