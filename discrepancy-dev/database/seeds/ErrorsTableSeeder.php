<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ErrorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * return void
     */
    public function run()
    {
        DB::table('errors')->delete();
	    DB::table('errors')->insert([
            'order_id'     => '925473',
            'rap_order_id'     => '40183427',
            'GCS_reference'     => '20151256',
            'SC_reference'     => 'SC1982751',
            'created_by_user_id'     => '1',
            'status'     => 'New',
            'errors_linked'     => NULL,
            'created_at' => Carbon::now()->addHour(),
            'updated_at' => Carbon::now()->addHour(),
	    ]);
	    DB::table('errors')->insert([
            'order_id'     => '1002436',
            'rap_order_id'     => '40193517',
            'GCS_reference'     => '20151314',
            'SC_reference'     => 'SC1990734',
            'created_by_user_id'     => '2',
            'status'     => 'In Progress',
            'errors_linked'     => '1010321',
            'created_at' => Carbon::now()->addHour(),
            'updated_at' => Carbon::now()->addHour(),
	    ]);
	    DB::table('errors')->insert([
            'order_id'     => '1010321',
            'rap_order_id'     => '40214527',
            'GCS_reference'     => '20151402',
            'SC_reference'     => 'SC2011234',
            'created_by_user_id'     => '3',
            'status'     => 'Resolved',
            'errors_linked'     => '1002436',
            'created_at' => Carbon::now()->addHour(),
            'updated_at' => Carbon::now()->addHour(),
	    ]);
    }
}
