<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FeedbackController extends Controller
{
    public function returnPage(){
        
        	return view('pages/feedback');
        
        }

     //Report bug function
	public function giveFeedback(){

		$input	=	Input::all();												//retrieves all input from the users form
		$rules	=	array(	 													//change the table name once the updatedd database base has been created	
						'feedbackTitle'  		=> 	'required|feedback', 		//this field is required as it is in the errors table
						'fdescription' 			=> 	'required|feedback',
					 	);

    	$v = Validator::make($input, $rules);									//this acts as a boolean
		
		if($v->passes()){														//if the form meets all the requirements

			$feedback = new feedback; 										//creating an object which is going to store a record of data using the save() function

			$feedback->feedback_subject 			= $input['feedbackTitle'];			
			$feedback->feedback_report				= $input['fdescription'];
			$feedback->save(); 													//the save function insets a record into the database

			return Redirect::to('pages/feedback');
		}else{
			return Redirect::('pages/feedback')->withInput()->withErrors($v); 	//returns the user to the 'errors page' with the error specified
		}



	}

}
