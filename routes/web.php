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
    return view('master');
});



Route::get('/', function () {
    return view('reporte');
});


Route::get('/', function () {
    return view('registro');
});

Route::get('/reporte2', function () {
    return view('reporte2');
});


Route::post('registro' , 'Turnos@Matriz');
Route::post('registro2' , 'Turnos@Cajero1');