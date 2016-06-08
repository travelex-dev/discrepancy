<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AddErrorController extends Controller
{
    public function returnPage(){
    
    	return view('pages/adderror');
    
    }
}
