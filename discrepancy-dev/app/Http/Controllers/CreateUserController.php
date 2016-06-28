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
							'firstName' 	=> 	'required|min:1|max:128', 			//this field is required, and is in the users table
							'lastName' 		=> 	'required|min:1|max:128',
							'username' 		=> 	'required|min:4|unique:users',
						 	'email' 		=> 	'required|email|unique:users',
						 	'password' 		=>	'required|alphaNum|min:3|max:128');

		$v = Validator::make($input, $rules);

		
		if($v->passes()){
																			//hashing password **later on implement stripping of password!
			$password = $input['password'];
			$password = hash::make($password);

			 $user = new User;

			 $user->first_name 	= $input['firstName'];
			 $user->last_name	= $input['lastName'];
			 $user->username 	= $input['username'];
			 $user->email 		= $input['email'];
			 $user->password 	= $password;
			 $user->save();													//the save function inserts a record into the database

		 	return Redirect::to('/');
		}else{
			return Redirect::to('createuser')->withInput()->withErrors($v); 	//returns the user to the create user page with the error specified
		}
	}
  

}
