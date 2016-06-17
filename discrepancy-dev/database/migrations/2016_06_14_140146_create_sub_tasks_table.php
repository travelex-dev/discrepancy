<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_tasks', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('task_id')->nullable();
            $table->string('sub_task_type_name');
            $table->integer('atm_id')->nullable();
            $table->integer('atm_profile_id')->nullable();
            $table->integer('cassette_id')->nullable();
            $table->integer('column_id')->nullable();
            $table->integer('dump_cassette_id')->nullable();
            $table->integer('order_id');
            $table->integer('tote_id')->nullable();
            $table->integer('tray_id')->nullable();
            $table->integer('tub_id')->nullable();
            $table->integer('value_item_id')->nullable();
            $table->integer('fill_instruction_qty')->nullable();
            $table->integer('verified_by_user_id')->nullable();
            $table->integer('assigned_to_user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sub_tasks');
    }
}
