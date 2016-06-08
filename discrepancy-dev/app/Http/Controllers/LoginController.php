<?php
//class related to all login and logout methods
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller 
{

    public function returnPage(){ //This function returns login page
        
        	return view('pages/login');
        
    }

    //START OF LOGIN FUNCTION
	public function doLogin(){
    														
	    $rules = array(										// Creating validation rules for the rules
	        'username'    	=> 'required|username|min:4', 	// make sure the username field is not empty, and has to be greater than four characters
	        'password' 		=> 'required|alphaNum|min:3' 	// password can only be alphanumeric and has to be greater than 3 characters
	    );

	    													
	    $validator = Validator::make(Input::all(), $rules);	// running validation rules on the inputs from the form

	    													
	    if ($validator->fails()) {							// if the validation fails, redirect to login page
	        return Redirect::to('login')
	            ->withErrors($validator) 					// send back all errors to the login form
	            ->withInput(Input::except('password')); 	// send back the input (not the password) so that we can repopulate the form
	    } else {

	      // create our user data for the authentication
	        $userdata = array(
	            'username'  => Input::get('username'),
	            'password'  => Input::get('password')
	        );
	        												
	        if (Auth::attempt($userdata)){					// attempt to do the login
	        	//validation successful
				return Redirect::to('dashboard'); 			
	        } else{        

	            // validation not successful, send back to form 
	            return Redirect::to('login');
	        }

	    }
	}
	//END OF LOGIN FUNCTION

	//LOGOUT FUNCTION
	public function doLogout(){
	    Auth::logout(); // log the user out of our application
	    return Redirect::to('login'); // redirect the user to the login screen
	}


}
