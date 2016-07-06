<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{

	public function run(){

  factory(App\User::class, 3)->create()->each(function($u) {
    $u->issues()->save(factory(App\Error::class)->make());
  });

	    /*DB::table('users')->delete();
	    User::create(array(
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