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

/*
Route::get('/adderror', function () {
    return view('pages/adderror');
});

Route::get('/bugreport', function () {
    return view('pages/bugreport');
});

Route::get('/createuser', function () {
    return view('pages/createuser');
});

Route::get('/currencyoverview', function () {
    return view('pages/currencyoverview');
});

Route::get('/dashboard', function () {
    return view('pages/dashboard');
});

Route::get('/errordetails', function () {
    return view('pages/errordetails');
});

Route::get('/feedback', function () {
    return view('pages/feedback');
});

Route::get('/investigatingerrors', function () {
    return view('pages/investigatingerrors');
});

Route::get('/listdocumenterrors', function () {
    return view('pages/listdocumenterrors');
});

Route::get('/login', function () {
    return view('pages/login');
});

Route::get('/overview', function () {
    return view('pages/overview');
});
*/

?>