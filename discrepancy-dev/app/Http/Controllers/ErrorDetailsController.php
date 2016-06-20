<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ErrorDetailsController extends Controller
{
    public function returnPage(){
			                                             //code to send out data based on the orderInvestigation queries
        
        	$errorDetails = ErrorDetails::				//connecting to the errorDetails model
        	return view('pages/errordetails');
        
        }
        public function returnErrorDetails($rapOrderIdIn){
        
        	$rapOrderId = $rapOrderIdIn;

        	$orderDetails = DB::raw('query code here', [$rapOrderId]);

        	return View::make("pages/errordetails")->with("orderDetails", $orderDetails); 
        }
}
