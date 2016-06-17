<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_movements', function (Blueprint $table) {
           
            $table->increments('id');
            $table->integer('value_item_id');
            $table->integer('order_id');
            $table->integer('job_id');
            $table->integer('cassette_id')->nullable();
            $table->integer('column_id')->nullable();
            $table->integer('dump_cassette_id')->nullable();
            $table->integer('tote_id')->nullable();
            $table->integer('tray_id')->nullable();
            $table->integer('tub_id')->nullable();
            $table->integer('task_id')->nullable();
            $table->integer('quantity');
            $table->integer('cassette_stock')->nullable();
            $table->integer('dump_cassette_stock')->nullable();
            $table->integer('from_rap_stock')->nullable();
            $table->integer('in_process_stock')->nullable();
            $table->integer('till_stock')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stock_movements');
    }
}
