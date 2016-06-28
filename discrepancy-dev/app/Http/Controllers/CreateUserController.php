<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Input;
use Redirect;
use Auth;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Hash;

class CreateUserController extends Controller
{
    //
    public function returnPage(){											//returns create user page
        
        	return view('pages/createuser');

        
        }
	public function postCreateUser(){

		$input	=	Input::all();
		$rules	=	array(	 									
<<<<<<< Updated upstream
			'firstName' 	=> 	'required|min:1|max:128',
			'lastName' 		=> 	'required|min:1|max:128',
			'username' 		=> 	'required|unique:users',
			'email' 		=> 	'required|email|unique:users',
			'password' 		=>	'required|alphaNum|min:3|max:128');
=======
							'first_name' 	=> 	'required|users', 			//this field is required, and is in the users table
							'last_name' 		=> 	'required|users',
							'username' 		=> 	'required|unique|users',
						 	'email' 		=> 	'required|unique:users|email',
						 	'password' 		=>	'required|alphaNum|min:3');
>>>>>>> Stashed changes

		$v = Validator::make($input, $rules);

		
		if($v->passes()){
																			//hashing password **later on implement stripping of password!
			$password = $input['password'];
			$password = hash::make($password);

<<<<<<< Updated upstream
			$user = new User;
			$user->first_name 	= $input['firstName'];
			$user->last_name	= $input['lastName'];
=======
			$user -> new User();

			$user->first_name 	= $input['first_name'];
			$user->last_name	= $input['last_name'];
>>>>>>> Stashed changes
			$user->username 	= $input['username'];
			$user->email 		= $input['email'];
			$user->password 	= $password;
			$user->save();													

		 	return Redirect::to('dashboard');
		}else{
			return Redirect::to('createuser')->withInput()->withErrors($v); 	//returns the user to the create user page with the error specified
		}
	}
  

}
