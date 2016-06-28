<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Input;
use Redirect;
use Auth;
use App\Bug_report;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Hash;

class BugReportController extends Controller
{
    public function returnPage(){
        
        	return view('pages/bugreport');
        
        }


    //Report bug function
	public function reportBug(){

		$input	=	Input::all();												//retrieves all input from the users form
		$rules	=	array(	 													//change the table name once the updatedd database base has been created	
						'bugTitle'  		=> 	'required', 			//this field is required as it is in the errors table
						'bugDescription' 	=> 	'required',
					 	);

    	$v = Validator::make($input, $rules);									//this is a boolean
		
		if($v->passes()){														//if the form meets all the requirements

			$bugreport = new Bug_report; 										//creating an object which is going to store a record of data using the save() function

			$bugreport->bug_title		= $input['bugTitle'];			
			$bugreport->bug_report 		= $input['bugDescription'];
			$bugreport->user_id = Auth::user()->id;
			$bugreport->save(); 												//the save function insets a record into the database

			return Redirect::to('bugreport');
		}else{
			return Redirect::to('bugreport')->withInput()->withErrors($v); //returns the user to the 'errors page' with the error specified
		}



	}


}
