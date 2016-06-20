<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('order_id');
            $table->string('feeder_mapping');
            $table->integer('weight')->nullable();
            $table->string('bundle_drop_state');
            $table->string('dispense_type');
            $table->string('state');
            $table->string('location');
            $table->integer('packet_drop_state');
            $table->binary('set_state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jobs', function (Blueprint $table) {
            //
        });
    }
}
