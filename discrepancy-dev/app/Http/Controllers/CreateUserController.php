<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CreateUserController extends Controller
{
    public function returnPage(){								//returns create user page
        
        	return view('pages/createuser');

        
        }

	public function postCreateUser(){

		$input	=	Input::all();
		$rules	=	array(	 									//creating array of user data PLEASE ADD IN THE VARIABLES FOR FIRST NAME AND LAST NAME
							'firstName' => 'required|users', 	//this field is required, and is inserted into the users table
							'LastName' 	=> 'required|users',
							'username' 	=> 'required|unique|users',
						 	'email' 	=> 'required|unique:users|email',
						 	'password' 	=>'required|alphaNum|min:3');

		$v = Validator::make($input, $rules);

		if($v->passes()){
																//hashing password **later on implement stripping of password!
			$password = $input['password'];
			$password = hash::make($password);

			$user -> new User();

			$user->username = $input['username'];
			$user->email 	= $input['email'];
			$user->password = $password
			$user->save();

			return Redirect::to('login');
		}else{
			return Redirect::('createuser')->withInput()->withErrors($v); //returns the user to the create user page with the error specified
		}
	}

}
