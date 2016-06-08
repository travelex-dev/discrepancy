<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CurrencyOverviewController extends Controller
{
    public function returnPage(){
        
        	return view('pages/currencyoverview');
        
        }
}
