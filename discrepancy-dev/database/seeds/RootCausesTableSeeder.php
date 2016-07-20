<?php

use Illuminate\Database\Seeder;

class RootCausesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('root_causes')->delete();
	    DB::table('root_causes')->insert([
        'name'			=> 'Cassette Error',
        ]);
        DB::table('root_causes')->insert([
        'name'			=> 'Column Error',
        ]);
        DB::table('root_causes')->insert([
        'name'			=> 'ATM Error',
        ]);
        DB::table('root_causes')->insert([
        'name'			=> 'ULMA Error',
        ]);
        DB::table('root_causes')->insert([
        'name'			=> 'CIKAM Error',
        ]);
        DB::table('root_causes')->insert([
        'name'			=> 'Cashier Error',
        ]);
        DB::table('root_causes')->insert([
        'name'			=> 'Mailroom Error',
        ]);
        DB::table('root_causes')->insert([
        'name'			=> 'Other Error',
        ]);
        DB::table('root_causes')->insert([
        'name'			=> 'Error not yet determined',
        ]);
    }
}
