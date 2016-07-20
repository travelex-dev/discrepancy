<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErrorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('errors', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('order_id');
            $table->integer('customer_id');
            $table->integer('rap_order_id');
            $table->integer('rap_part_id');
            $table->integer('gcs_reference');
            $table->string('sc_reference')->unique();
            $table->integer('created_by_user_id');
            $table->string('status');
            $table->string('errors_linked')->nullable();
            $table->timestampTz('date_raised')->default('NOW()');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('errors');
    }
}
