<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FeedbackController extends Controller
{
    public function returnPage(){
        
        	return view('feedback');
        
        }
}
