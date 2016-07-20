<?php

use Illuminate\Database\Seeder;

class ExchangeRatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exchange_rates')->delete();

	    DB::table('exchange_rates')->insert([
            'currency' => 'Euro',
            'exchange_rate' => 0.85482,
            'updated_at' => '2016-07-08 09:52:00',
	    ]);
	    DB::table('exchange_rates')->insert([
            'currency' => 'US Dollar',
            'exchange_rate' => 0.77230,
            'updated_at' => '2016-07-08 09:52:00',
	    ]);
	    DB::table('exchange_rates')->insert([
            'currency' => 'Japanese Yen',
            'exchange_rate' => 0.00767,
            'updated_at' => '2016-07-08 09:52:00',
	    ]);
	    
    }
}
