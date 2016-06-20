<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CurrencyOverviewController extends Controller
{
    public function returnPage(){

    	$currencyOverview = DB::table('exchange_rate')->get();										//$currencyOverview is an array equal too the contents of the SELECT statement or in this case I'm just going to pull all the exchange rate table data because that's what we essentially need for this page
    	return View::make("pages/currencyoverview")->with("currencyOverview", $currencyOverview); 	//passing a variable to the view into a variable called "currencyOverview" using the data within $currencyOverview
     }
}