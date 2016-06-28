<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErrorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('error_details', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('error_id');
            $table->integer('customer_id');
            $table->boolean('error_difference'); // If TRUE, then short; If FALSE, then OVER
            $table->string('error_currency');
            $table->integer('error_denom');
            $table->integer('error_quantity');
            $table->integer('exchange_rate_id');
            $table->float('discrepancy_cost (£)');
            $table->string('state');
            $table->string('root_cause')->nullable();
            $table->string('specific_cause')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('error_details');
    }
}
