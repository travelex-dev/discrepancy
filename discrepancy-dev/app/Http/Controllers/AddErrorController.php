<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AddErrorController extends Controller
{
    public function returnPage(){ //returns adderror page
    
    	return view('pages/adderror');
    
    }


    public function addError(){ 

		$input	=	Input::all();											//retrieves all input from the users form
		$rules	=	array(	 												//change the table name once the updatedd database base has been created	
						'gcsReference'  => 	'required|errors', 				//this field is required as it is in the errors table
						'scReference' 	=> 	'required|errors',
						'rapOrderId' 	=> 	'required|errors',
					 	'dateRaised' 	=> 	'required|errors',
					 	'rapPartId' 	=>	'required|errors'
					 	);

    	$v = Validator::make($input, $rules);
		
		if($v->passes()){													//if the form meets all the requirements

			$error = new Error; 											//creating an object which is going to store a record of data using the save() function

			$error->gcs_reference 	= $input['gcsReference'];			
			$error->sc_reference 	= $input['scReference'];
			$error->rap_order_id 	= $input['rapOrderId'];
			$error->date_raised 	= $input['dateRaised'];
			$error->rap_part_id 	= $input['rapPartId'];


			$error->save(); 												//the save function insets a record into the database

			return Redirect::to('pages/addError');
		}else{
			return Redirect::('pages/addError')->withInput()->withErrors($v);//returns the user to the 'errors page' with the error specified
		}


    }


}
