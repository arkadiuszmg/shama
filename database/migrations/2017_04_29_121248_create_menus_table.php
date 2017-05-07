<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('comments');
            $table->double('price')->unsigned();

            $table->integer('photo_id')->unsigned();
            $table->foreign('photo_id')->references('id')->on('images')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('restaurant_id')->unsigned();
            $table->foreign('restaurant_id')->references('id')->on('restaurants')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
        Schema::dropIfExists('menus');
    }
}
