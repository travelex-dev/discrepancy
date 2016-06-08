<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{

	public function run(){
	    DB::table('users')->delete();
	    User::create(array(
	        'name'     => 'Azhar Ahmad',
	        'username' => 'Azhar52',
	        'email'    => 'test@test.com',
	        'password' => Hash::make('test'),
	    ));
	}

}

?>