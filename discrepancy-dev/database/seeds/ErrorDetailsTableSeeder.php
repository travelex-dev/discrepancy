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
            'customer_id'			=> '16',
            'error_difference'		=> TRUE,
            'error_currency'		=> 'EUR',
            'error_denom'			=> 10,
            'error_quantity'		=> 5,
            'exchange_rate_id'		=> 2,
            'discrepancy_cost (£)'	=> ((5 * 10) * 0.76885),
            'state'					=> 'In Progress',
            'root_cause'			=> NULL,
            'specific_cause'		=> NULL,
	    ]);
	    DB::table('error_details')->insert([
            'error_id'				=> '2',
            'customer_id'			=> '24',
            'error_difference'		=> FALSE,
            'error_currency'		=> 'EUR',
            'error_denom'			=> 20,
            'error_quantity'		=> 12,
            'exchange_rate_id'		=> 2,
            'discrepancy_cost (£)'	=> -((12 * 20) * 0.76885),
            'state'					=> 'New',
            'root_cause'			=> NULL,
            'specific_cause'		=> NULL,
	    ]);
	    DB::table('error_details')->insert([
            'error_id'				=> '1',
            'customer_id'			=> '12',
            'error_difference'		=> TRUE,
            'error_currency'		=> 'USD',
            'error_denom'			=> 1,
            'error_quantity'		=> 100,
            'exchange_rate_id'		=> 3,
            'discrepancy_cost (£)'	=> ((100 * 1) * 0.68091),
            'state'					=> 'Further Investigation',
            'root_cause'			=> 'Column Error',
            'specific_cause'		=> 'Column 6',
	    ]);
	    DB::table('error_details')->insert([
            'error_id'				=> '1',
            'customer_id'			=> '12',
            'error_difference'		=> TRUE,
            'error_currency'		=> 'EUR',
            'error_denom'			=> 50,
            'error_quantity'		=> 25,
            'exchange_rate_id'		=> 2,
            'discrepancy_cost (£)'	=> ((25 * 50) * 0.76885),
            'state'					=> 'Complete',
            'root_cause'			=> 'Cassette Error',
            'specific_cause'		=> 'Cassete 124',
	    ]);
	    DB::table('error_details')->insert([
            'error_id'				=> '1',
            'customer_id'			=> '10',
            'error_difference'		=> FALSE,
            'error_currency'		=> 'EUR',
            'error_denom'			=> 50,
            'error_quantity'		=> 25,
            'exchange_rate_id'		=> 2,
            'discrepancy_cost (£)'	=> -((25 * 50) * 0.76885),
            'state'					=> 'Complete',
            'root_cause'			=> 'Cassette Error',
            'specific_cause'		=> 'Cassette 057',
	    ]);
    }
}
