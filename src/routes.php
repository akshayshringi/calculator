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

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});
Route::get('calculator/add/{a}/{b}', 'Akshay\Calculator\CalculatorController@add');
Route::get('calculator/subtract/{a}/{b}', 'Akshay\Calculator\CalculatorController@subtract');