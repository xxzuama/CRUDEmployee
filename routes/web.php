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

Route::get('/zuama', function () {
    return view('school');
});

Route::get('/lemot', function () {
    echo "kenapa kok lemot";
});

// Route::get('/home', function () {
//     echo "disini omah";
// });

Route::get('/telo', function () {
    return view('telo');
});

//pakai kontroler
Route::get('/terong','CapungController@index');

Route::get('/brokoli/dewa','CapungController@siti');


//sekarang bikin route untuk customer
Route::get('/Customer', 'CustomerController@index');

Route::get('/Supplier', 'SupplierController@index');

Route::get('/Employee', 'EmployeeController@index');

//sekarang bikin route untuk add customer
Route::get('/Customer/create', 'CustomerController@create');

Route::get('/Supplier/create', 'SupplierController@create');

Route::get('/Employee/create', 'EmployeeController@create');


//untuk store dari customer
Route::get('/Customer/store', 'CustomerController@store');
Route::get('/Supplier/store', 'SupplierController@store');
Route::get('/Employee/store', 'EmployeeController@store');

Route::resource('Customer', 'CustomerController');
Route::resource('Supplier', 'SupplierController');
Route::resource('Employee', 'EmployeeController');

Route::resource('/Writer', 'WriterController');

Route::get('/Home', 'HomeController@index');
