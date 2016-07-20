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
            $table->string('product_code');
            $table->string('product_code_new');
            $table->string('currency_code');
            $table->string('currency_code_new');
            $table->integer('denom_value');
            $table->integer('denom_value_new');
            $table->boolean('cassette_fit');
            $table->boolean('cassette_fit_new');
            $table->boolean('column_fit');
            $table->boolean('column_fit_new');
            $table->integer('balance_interval');
            $table->integer('balance_interval_new');
            $table->integer('column_trigger');
            $table->integer('column_trigger_new');
            $table->integer('column_additional');
            $table->integer('column_additional_new');
            $table->integer('cassette_min');
            $table->integer('cassette_min_new');
            $table->integer('cassette_trigger');
            $table->integer('cassette_trigger_new');
            $table->integer('cassette_additional');
            $table->integer('cassette_additional_new');
            $table->timestampTz('last_balanced_at')->default('NOW()');
            $table->integer('last_balanced_by_user_id');
            $table->timestampTz('created_at')->default('NOW()');
            $table->integer('created_by_user_id');
            $table->timestampTz('updated_at')->default('NOW()');
            $table->integer('updated_by_user_id');
            $table->timestampTz('verified_at')->default('NOW()');
            $table->integer('verified_by_user_id');
            $table->boolean('enabled');
            $table->boolean('enabled_new');
            $table->integer('lock_version');
            $table->text('cassette_algorithm');
            $table->text('cassette_algorithm_new');
            $table->text('column_algorithm');
            $table->text('column_algorithm_new');
            $table->text('verification_state');
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
