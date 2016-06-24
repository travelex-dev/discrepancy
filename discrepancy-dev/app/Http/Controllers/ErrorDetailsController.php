<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ErrorDetailsController extends Controller
{
    public function returnPage(){
			                                             //code to send out data based on the orderInvestigation queries
        	//$errorDetails = ErrorDetails::			//connecting to the errorDetails model
        	return view('pages/errordetails');
        
        }
        public function returnErrorDetails($rapOrderIdIn){
        
        	$rapOrderId = $rapOrderIdIn;

        	$orderDetails = DB::raw('query goes here', [$rapOrderId]); //or connect to the model, right ollie?

      

        	return View::make("pages/errordetails")->with("orderDetails", $orderDetails); 
        }
}

//this  should be the query for query for 
/*
--ORDER INFO
-- SELECT
--          'rapID: ' || rap_order_id || '-0' || rap_part_id || ' | orderID: ' || orders.id || ' | ' || category || ' | weight: ' || weight || ' | ' || state || ' at: ' || date_trunc ('seconds', orders.finished_at) AS order_info,
--          category,
--          orders.id AS order_id, 
--          rap_transaction_id, 
--          rap_order_id, 
--          rap_part_id,  
--          orders.created_at, 
--          orders.scheduled_at,
--          state,
--          weight AS total_weight,         
--          orders.finished_at, 
--          type,
--          rap_type, 
--          carriers.name AS carrier, 
--          corporates.name AS corporates, 
--          customers.name AS Customer 
-- FROM         archive.orders
-- INNER JOIN          carriers ON (orders.carrier_id = carriers.id)
-- INNER JOIN          corporates ON (orders.corporate_id = corporates.id)
-- INNER JOIN          customers ON (orders.customer_id = customers.id)
-- INNER JOIN          sorting_bays ON (orders.sorting_bay_id = sorting_bays.id)
-- INNER JOIN          wallets ON (orders.wallet_id = wallets.id)
-- WHERE      orders.rap_order_id = error.rap_order_id
-- ORDER BY orders.id;

*/