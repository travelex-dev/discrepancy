<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InvestigatingErrorsController extends Controller
{
    public function returnPage(){
        
        	return view('pages/investigatingerrors');
        
    }


    
}
