<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BugReportController extends Controller
{
    public function returnPage(){
        
        	return view('pages/bugreport');
        
        }


    //Report bug function
	public function reportBug(){

		$input	=	Input::all();												//retrieves all input from the users form
		$rules	=	array(	 													//change the table name once the updatedd database base has been created	
						'bugTitle'  		=> 	'required|bugReport', 			//this field is required as it is in the errors table
						'bugDescription' 	=> 	'required|bugReport',
					 	);

    	$v = Validator::make($input, $rules);									//this is a boolean
		
		if($v->passes()){														//if the form meets all the requirements

			$bugreport -> new bugreport(); 										//creating an object which is going to store a record of data using the save() function

			$bugreport->bugTitle 			= $input['bugTitle'];			
			$bugreport->bugDescription 		= $input['bugDescription'];
			$bugreport->save(); 												//the save function insets a record into the database

			return Redirect::to('pages/bugreport');
		}else{
			return Redirect::('pages/bugreport')->withInput()->withErrors($v); //returns the user to the 'errors page' with the error specified
		}



	}


}
