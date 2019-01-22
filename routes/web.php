<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//pakai controller
Route::get('/terong','CapungController@index');
//memanggil Controller
//capung dengan fungsi pujangga

Route::get('/brokoli', 'CapungController@pujangga');

Route::get('/brokoli/dewa','CapungController@siti');

Route::get('/Customer/create', 'CustomerController@create');

Route::get('/Customer/create', 'CustomerController@store');

Route::get('/Employee/create', 'EmployeeController@create');

Route::get('/Employee/create', 'EmployeeController@store');

Route::get('/Supplier/create', 'SupplierController@create');

Route::get('/Supplier/create', 'SupplierController@store');

Route::resource('Employee','EmployeeController');
Route::resource('Customer','CustomerController');

Route::resource('Supplier','SupplierController');
