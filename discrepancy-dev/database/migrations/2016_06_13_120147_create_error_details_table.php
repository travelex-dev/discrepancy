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
            $table->integer('value_item_id');
            $table->integer('quantity');
            $table->float('exchange_rate');
            $table->string('state');
            $table->integer('root_cause_id')->nullable();
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
