<?php
use App\User;
use App\Error;
use Database\factories\ModelFactory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{

	public function run(){

		DB::table('users')->delete();

  		factory(App\User::class, 5)->create(); // ->each(function($u) {$u->errors()->save(factory(App\Error::class)->make());})

	    
	    /*User::create(array(
	        'first_name'     => 'Azhar',
	        'last_name'     => 'Ahmad',
	        'username' => 'azhar52',
	        'email'    => 'test@test.com',
	        'password' => Hash::make('test'),
	    ));
	    User::create(array(
	        'first_name'     => 'Anij',
	        'last_name'     => 'Gurung',
	        'username' => 'anij32',
	        'email'    => 'manny@test.com',
	        'password' => Hash::make('password'),
	    ));
	    User::create(array(
	        'first_name'     => 'Oliver',
	        'last_name'     => 'Baldry',
	        'username' => 'oliver12',
	        'email'    => 'blokey@test.com',
	        'password' => Hash::make('postgres'),
	    ));*/
	}

}

?>