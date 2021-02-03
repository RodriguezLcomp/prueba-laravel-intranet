<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/formulario' , function() {
    return view('formulario');
});
//Route::view('/formulario2', 'formulario');

Route::post('/proceso' , function() {
    //Capturamos datos desde el form
    $prueba = $_POST['prueba'];
    //Pasamos datos a la vista como array asociativo

    return view('proceso', ['prueba' => $prueba]);
});

Route::post('/grupos' , function() {
    return view('grupos');
});
