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


Route::get('/', 'LoginController@returnPage');
//Route::post('login', 'LoginController@returnPage');

Route::get('createuser', 'CreateUserController@returnPage');

Route::get('dashboard', 'DashboardController@returnPage');

Route::get('currencyoverview', 'CurrencyOverviewController@returnPage');

Route::get('feedback', 'FeedbackController@returnPage');

Route::get('bugreport', 'BugReportController@returnPage');

Route::get('investigatingerrors', 'InvestigatingErrorsController@returnPage');

Route::get('errordetails', 'ErrorDetailsController@returnPage');

Route::get('listdocumenterrors', 'ListDocumentErrorsController@returnPage');

Route::get('overview', 'OverviewController@returnPage');

Route::get('adderror', 'AddErrorController@returnPage');

?>