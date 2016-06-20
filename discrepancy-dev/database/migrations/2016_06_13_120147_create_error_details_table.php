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
            $table->binary('error_difference');
            $table->integer('error_denom');
            $table->integer('error_quantity');
            $table->integer('exchange_rate_id');
            $table->integer('discrepancyCost');
            $table->string('state');
            $table->string('root_cause');
            $table->string('specific_cause');
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
