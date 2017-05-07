<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('restaurant_id')->unsigned();
            $table->foreign('restaurant_id')->references('id')->on('restaurants')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->double('total_order_price')->unsigned();
            $table->enum('status_order', ['new', 'in progress', 'completed']);


            $table->integer('costumer_id')->unsigned();
            $table->foreign('costumer_id')->references('id')->on('customers')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->string('customer_comments', 320);

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
        Schema::dropIfExists('orders');
    }
}
