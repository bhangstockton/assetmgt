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



Route::auth();

Route::get('/','DashboardController@index');
Route::resource('/supplier','SuppliersController');
Route::resource('/office','OfficesController');
Route::resource('/employee','EmployeeController');
Route::resource('/purchase','PurchaseController');
Route::resource('/po_details', 'PODetailsController');
Route::resource('/user-manager', 'UserManagerController');
Route::resource('/brand', 'BrandController');

