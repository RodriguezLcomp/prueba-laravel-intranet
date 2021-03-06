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

    DB::table('aut_grupo')
    ->insert(['grupo'=>$grupo,'descgrp'=>$desc,'privado'=>$privado,'qintimo'=>$intimo]);


    return redirect('/adminGrupos')
                ->with('mensaje','Grupo N°:'.$grupo.' agregado correctamente');
});

Route::get('/modificarGrupo/{grupo}', function($grupo) {
    // $grupo = DB::select('SELECT grupo, descgrp, privado, qintimo
    //                     FROM aut_grupo
    //                     WHERE grupo = ?
    //                     AND )

    $grupo = DB::table('aut_grupo')
                ->where('grupo', $grupo)
                ->first();
    // dd($grupo);

    return view('/modificarGrupo', [ 'grupo' => $grupo ]);
});

Route::post('/modificarGrupo/{grupo}', function ($grupo) {
    $grupo = $_POST['numeroGrupo'];
    $desc = $_POST['nombreGrupo'];
    $privado = $_POST['privado'];
    $intimo = $_POST['intimo'];

    $modificar = DB::table('aut_grupo')
    ->where('grupo',$grupo)
    ->update(['grupo'=>$grupo, 'descgrp'=>$desc, 'privado'=>$privado, 'qintimo'=>$intimo]);
    // dd($modificar);

    return redirect('/adminGrupos')
    ->with('mensaje','Grupo N°:'.$modificar.' modificado correctamente');
});

Route::get('/eliminarGrupo/{grupo}', function($grupo) {
    $grupo = DB::table('aut_grupo')
                ->where('grupo', $grupo)
                ->first();

    return view('/eliminarGrupo', [ 'grupo' => $grupo ]);
});

Route::post('/eliminarGrupo', function() {
    $grupo = $_POST['numeroGrupo'];
    $desc = $_POST['nombreGrupo'];
    $privado = $_POST['privado'];
    $intimo = $_POST['intimo'];

    DB::table('aut_grupo')
        ->where('grupo', $grupo)
        ->delete();

    return redirect('/adminGrupos');
});
