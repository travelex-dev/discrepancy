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
Route::get('login', 'LoginController@returnPage');
Route::post('pages/login', 'LoginController@doLogin');
Route::post('pages/createuser', 'CreateUserController@postCreateUser');
Route::get('createuser', 'CreateUserController@returnPage');
Route::post('pages/feedback', 'FeedbackController@giveFeedback');
Route::get('feedback', 'FeedbackController@returnPage');
Route::post('pages/bugreport', 'BugReportController@reportBug');
Route::get('bugreport', 'BugReportController@returnPage');
Route::get('currencyoverview', 'CurrencyOverviewController@returnPage');
Route::get('dashboard', 'DashboardController@returnPage');
Route::get('errordetails', 'ErrorDetailsController@returnPage');
Route::get('investigatingerrors', 'InvestigatingErrorsController@returnPage');
Route::get('listdocumenterrors', 'ListDocumentErrorsController@returnPage');
Route::get('overview', 'OverviewController@returnPage');
Route::get('adderror', 'AddErrorController@returnPage');

?>
