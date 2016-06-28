<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Input;
use Redirect;
use Auth;
use App\Feedback_report;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Hash;

class FeedbackController extends Controller
{
    public function returnPage(){
        
        	return view('pages/feedback');
        
        }

     //Report bug function
	public function giveFeedback(){
			
		$input	=	Input::all();												//retrieves all input from the users form
		$rules	=	array(	 													//change the table name once the updatedd database base has been created	
						'feedbackTitle'  		=> 	'required', 		//this field is required as it is in the errors table
						'feedbackDescription' 			=> 	'required',
					 	);
		
    	$v = Validator::make($input, $rules);									//this acts as a boolean
		
		if($v->passes()){	
														//if the form meets all the requirements

			$feedback = new Feedback_report; 										//creating an object which is going to store a record of data using the save() function
			$feedback->feedback_subject 			= $input['feedbackTitle'];			
			$feedback->feedback_report				= $input['feedbackDescription'];
			$feedback->user_id = Auth::user()->id;
			$feedback->save(); 													//the save function insets a record into the database

			return Redirect::to('feedback');

		}else{
					
			
			return Redirect::to('feedback')->withInput()->withErrors($v); 	//returns the user to the 'errors page' with the error specified
		
		}
	

	}
}
