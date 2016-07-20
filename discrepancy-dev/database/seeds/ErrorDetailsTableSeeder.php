<?php

use Illuminate\Database\Seeder;

class ErrorDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('error_details')->delete();
	    DB::table('error_details')->insert([
            'error_id'				=> '1',
            'value_item_id'			=> '76',
            'quantity'              => 5,
            'exchange_rate'   		=> 0.85482,
            'state'					=> 'In Progress',
            'root_cause_id'			=> NULL,
            'specific_cause'		=> NULL,
	    ]);
	    DB::table('error_details')->insert([
            'error_id'				=> '2',
            'value_item_id'			=> '74',
            'quantity'		        => 12,
            'exchange_rate'   		=> 0.85482,
            'state'					=> 'New',
            'root_cause_id'			=> NULL,
            'specific_cause'		=> NULL,
	    ]);
	    DB::table('error_details')->insert([
            'error_id'				=> '3',
            'value_item_id'			=> '77',
            'quantity'		        => 100,
            'exchange_rate'   		=> 0.85482,
            'state'					=> 'Further Investigation',
            'root_cause_id'			=> 2,
            'specific_cause'		=> 'Column 6',
	    ]);
	    DB::table('error_details')->insert([
            'error_id'				=> '4',
            'value_item_id'			=> '79',
            'quantity'		        => 25,
            'exchange_rate'   		=> 0.85482,
            'state'					=> 'Complete',
            'root_cause_id'			=> 1,
            'specific_cause'		=> 'Cassete 124',
	    ]);
	    DB::table('error_details')->insert([
            'error_id'				=> '5',
            'value_item_id'			=> '78',
            'quantity'		        => 25,
            'exchange_rate'   		=> 0.85482,
            'state'					=> 'Complete',
            'root_cause_id'			=> 1,
            'specific_cause'		=> 'Cassette 057',
	    ]);
        DB::table('error_details')->insert([
            'error_id'              => '6',
            'value_item_id'         => '76',
            'quantity'              => 5,
            'exchange_rate'   		=> 0.85482,
            'state'                 => 'In Progress',
            'root_cause_id'         => NULL,
            'specific_cause'        => NULL,
        ]);
        DB::table('error_details')->insert([
            'error_id'              => '7',
            'value_item_id'         => '76',
            'quantity'              => 5,
            'exchange_rate'   		=> 0.85482,
            'state'                 => 'In Progress',
            'root_cause_id'         => NULL,
            'specific_cause'        => NULL,
        ]);
        DB::table('error_details')->insert([
            'error_id'              => '5',
            'value_item_id'         => '74',
            'quantity'              => 12,
            'exchange_rate'   		=> 0.85482,
            'state'                 => 'New',
            'root_cause_id'         => NULL,
            'specific_cause'        => NULL,
        ]);
        DB::table('error_details')->insert([
            'error_id'              => '6',
            'value_item_id'         => '79',
            'quantity'              => 100,
            'exchange_rate'   		=> 0.85482,
            'state'                 => 'Further Investigation',
            'root_cause_id'         => 2,
            'specific_cause'        => 'Column 6',
        ]);
        DB::table('error_details')->insert([
            'error_id'              => '7',
            'value_item_id'         => '79',
            'quantity'              => 25,
            'exchange_rate'   		=> 0.85482,
            'state'                 => 'Complete',
            'root_cause_id'         => 1,
            'specific_cause'        => 'Cassete 124',
        ]);
        DB::table('error_details')->insert([
            'error_id'              => '8',
            'value_item_id'         => '77',
            'quantity'              => 25,
            'exchange_rate'   		=> 0.85482,
            'state'                 => 'Complete',
            'root_cause_id'         => 1,
            'specific_cause'        => 'Cassette 057',
        ]);
        DB::table('error_details')->insert([
            'error_id'              => '9',
            'value_item_id'         => '76',
            'quantity'              => 5,
            'exchange_rate'   		=> 0.85482,
            'state'                 => 'In Progress',
            'root_cause_id'         => NULL,
            'specific_cause'        => NULL,
        ]);
        DB::table('error_details')->insert([
            'error_id'              => '10',
            'value_item_id'         => '76',
            'quantity'              => 5,
            'exchange_rate'   		=> 0.85482,
            'state'                 => 'In Progress',
            'root_cause_id'         => NULL,
            'specific_cause'        => NULL,
        ]);
        DB::table('error_details')->insert([
            'error_id'              => '11',
            'value_item_id'         => '74',
            'quantity'              => 12,
            'exchange_rate'   		=> 0.85482,
            'state'                 => 'New',
            'root_cause_id'         => NULL,
            'specific_cause'        => NULL,
        ]);
        DB::table('error_details')->insert([
            'error_id'              => '12',
            'value_item_id'         => '72',
            'quantity'              => 100,
            'exchange_rate'   		=> 0.85482,
            'state'                 => 'Further Investigation',
            'root_cause_id'         => 2,
            'specific_cause'        => 'Column 6',
        ]);
        DB::table('error_details')->insert([
            'error_id'              => '13',
            'value_item_id'         => '72',
            'quantity'              => 25,
            'exchange_rate'   		=> 0.85482,
            'state'                 => 'Complete',
            'root_cause_id'         => 2,
            'specific_cause'        => 'Cassete 124',
        ]);
        DB::table('error_details')->insert([
            'error_id'              => '14',
            'value_item_id'         => '77',
            'quantity'              => 25,
            'exchange_rate'   		=> 0.85482,
            'state'                 => 'Complete',
            'root_cause_id'         => 1,
            'specific_cause'        => 'Cassette 057',
        ]);
        DB::table('error_details')->insert([
            'error_id'              => '15',
            'value_item_id'         => '76',
            'quantity'              => 5,
            'exchange_rate'   		=> 0.85482,
            'state'                 => 'In Progress',
            'root_cause_id'         => NULL,
            'specific_cause'        => NULL,
        ]);
    }
}
