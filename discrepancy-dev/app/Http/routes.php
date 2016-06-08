<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('adderror', 'AddErrorController@returnPage');
Route::get('bugreport', 'BugReportController@returnPage');
Route::get('createuser', 'CreateUserController@returnPage');
Route::get('currencyoverview', 'CurrencyOverviewController@returnPage');
Route::get('dashboard', 'DashboardController@returnPage');
Route::get('errordetails', 'ErrorDetailsController@returnPage');
Route::get('feedback', 'FeedbackController@returnPage');
Route::get('investigatingerrors', 'InvestigatingErrorsController@returnPage');
Route::get('listdocumenterrors', 'ListDocumentErrorsController@returnPage');
Route::post('login', 'LoginController@returnPage');
Route::get('login', 'LoginController@returnPage');
Route::get('overview', 'OverviewController@returnPage');
?>