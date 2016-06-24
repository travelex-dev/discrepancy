<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InvestigatingErrorsController extends Controller
{
    public function returnPage(){
        
        	return view('pages/investigatingerrors');
        
    }

    public function updateSelectedError(){ 

		$input	=	Input::all();											//retrieves all input from the users form
		$rules	=	array(	 												//change the table name once the updatedd database base has been created	
						'origin'  		=> 	'required|error_details', 		//this field is required as it is in the investigate error_details table
						'typeOfError'	=> 	'required|error_details',
						'rootCause' 	=> 	'required|error_details',
					 	'specificCause' => 	'required|error_details',
					 	'comments' 		=>	'required|error_details'
					 	);

    	$v = Validator::make($input, $rules);								//this is boolean value
		
		if($v->passes()){													//if the form meets all the requirements

			$updateError = new error_details; 									//creating an object which is going to store a record of data using the save() function

			$updateError->origin 			= $input['origin'];			
			$updateError->type_of_error 	= $input['typeOfError'];
			$updateError->root_cause 		= $input['rootCause'];
			$updateError->specific_cause 	= $input['specificCause'];
			$updateError->comments 			= $input['comments'];


			$updateError->save(); 												//the save function insets a record into the database

			return Redirect::to('pages/investigatingerrors');
		}else{
			return Redirect::('pages/investigatingerrors')->withInput()->withErrors($v);//returns the user to the 'errors page' with the error specified
		}


    }

    
    
}
