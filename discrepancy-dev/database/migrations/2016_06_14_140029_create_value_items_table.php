<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValueItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('value_items', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('product_code');
            $table->integer('product_code_new');
            $table->integer('currency_code');
            $table->integer('currency_code_new');
            $table->integer('denom_value');
            $table->integer('denom_value_new');
            $table->integer('cassette_fit');
            $table->integer('cassette_fit_new');
            $table->integer('column_fit');
            $table->integer('column_fit_new');
            $table->integer('balance_interval');
            $table->integer('balance_interval_new');
            $table->integer('cassette_stock');
            $table->integer('column_trigger');
            $table->integer('column_trigger_new');
            $table->integer('column_additional');
            $table->integer('column_additional_new');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('value_items');
    }
}
