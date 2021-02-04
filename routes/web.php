<?php

use Illuminate\Support\Facades\DB;
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
Route::view('/inicio', 'inicio');

Route::post('/proceso' , function() {
    //Capturamos datos desde el form
    $prueba = $_POST['prueba'];
    //Pasamos datos a la vista como array asociativo

    return view('proceso', ['prueba' => $prueba]);
});

Route::get('/grupos' , function() {
    $grupos = DB::table('aut_grupo')->get();

    //Pasamos datos a la vista
    return view('grupos', ['grupos' => $grupos]);
});

Route::get('/adminGrupos', function () {
    // $grupo = DB::select('SELECT grupo, descgrp FROM aut_grupo');
    $grupo = DB::table('aut_grupo')->get();
    // $grupo = DB::table('aut_grupo')->select('grupo','descgrp')->get();   ##SI QUEREMOS SELECCIONAR 1 O MAS TABLAS


    // dd($grupo);
    return view('adminGrupos', ['grupo' => $grupo]);
});

Route::get('/agregarGrupo', function() {
    return view('agregarGrupo');
});

Route::post('/agregarGrupo', function() {
    $grupo = $_POST['numeroGrupo'];
    $desc = $_POST['nombreGrupo'];
    $privado = $_POST['privado'];
    $intimo = $_POST['intimo'];
});
