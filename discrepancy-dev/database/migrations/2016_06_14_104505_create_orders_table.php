<?php

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
            $table->integer('rap_transaction_id');
            $table->integer('rap_order_id');
            $table->integer('rap_part_id');
            $table->integer('carrier_id');
            $table->integer('corporate_id');
            $table->integer('customer_id');
            $table->integer('sorting_bay_id');
            $table->integer('wallet_id');
            $table->string('sales_advice');
            $table->string('dual_sales_advice');
            $table->integer('weight');
            $table->date('created_at');
            $table->date('scheduled_at');
            $table->date('finished_at');
            $table->string('category');
            $table->string('location');
            $table->string('state');
            $table->string('type');
            $table->string('rap_type');
            $table->string('priority');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
