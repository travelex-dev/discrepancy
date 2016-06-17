<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_movements', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('job_id');
            $table->integer('atm_id')->nullable();
            $table->integer('column_id')->nullable();
            $table->integer('tote_id')->nullable();
            $table->integer('task_id');
            $table->date('created_at');
            $table->string('location');
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order_movements');
    }
}
