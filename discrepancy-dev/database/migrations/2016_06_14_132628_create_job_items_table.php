<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_items', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('job_id');
            $table->integer('value_item_id');
            $table->integer('atm_id')->nullable();
            $table->integer('cassette_id')->nullable();
            $table->integer('column_id')->nullable();
            $table->integer('quantity');
            $table->binary('image')->nullable();
            $table->string('segmented');
            $table->integer('match_percentage');
            $table->string('match_strap');
            $table->string('comment');
            $table->date('verified_at');
            $table->integer('verified_by_user_id')->nullable();
            $table->string('buffer_drop_state');
            $table->binary('content_state');
            $table->binary('vision_state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('job_items');
    }
}
