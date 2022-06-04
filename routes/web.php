<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('inicio');
});

Route::view('/','inicio',['nombre' =>'Betsabe Programando']);
*/
Route::view('/','inicio')->name('inicio');
Route::view('nosotros','nosotros')->name('nosotros');
/* Route::get('productos','App\Http\Controllers\ProductosController@index'); */
Route::resource('productos','App\Http\Controllers\ProductosController');
Route::view('contacto','contacto')->name('contacto');
Route::post('contacto','App\Http\Controllers\ContactoController@store');
Route::view('acceder','acceder')->name('acceder');

//Route::apiresource('productos','ProductoController');