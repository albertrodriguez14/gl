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

Route::get('gestion', function()
{
  return View("layout.index");
});

Route::resource("empleados","EmployeeController",['only'=>['index','store',"delete"]]);
Route::get('empleados/{id}/destroy','EmployeeController@destroy')->name('empleados.destroy');
Route::resource("boletas","TicketController");
Route::get('boletas/{id}/destroy','TicketController@destroy')->name('boletas.destroy');
Route::resource('asignar','AssignedController'); 
