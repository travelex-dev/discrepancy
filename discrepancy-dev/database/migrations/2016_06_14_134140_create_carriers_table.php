<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carriers', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name');
            $table->string('name_new');
            $table->date('created_at');
            $table->integer('created_by_user_id');
            $table->date('updated_at');
            $table->integer('updated_by_user_id');
            $table->date('verified_at');
            $table->integer('verified_by_user_id');
            $table->binary('enabled');
            $table->binary('enabled_new');
            $table->string('content_state');
            $table->binary('verification_state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('carriers');
    }
}
