<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ListDocumentErrorsController extends Controller
{
    public function returnPage(){
        
        	return view('pages/listdocumenterrors');
        

    }

    public function returnDocumentErrors(){
    
    	
    	$documentErrors = DB::raw('SELECT * FROM error_details'); //NOTE: maybe add limits to query so page doesn't run slowly due to the query as errors begin to build up

        return View::make("pages/listdocumenterrors")->with("documentErrors", $documentErrors); 
    }



    
}
