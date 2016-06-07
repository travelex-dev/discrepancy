<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ListDocumentErrorsController extends Controller
{
    public function returnPage(){
        
        	return view('listdocumenterrors');
        
        }
}
