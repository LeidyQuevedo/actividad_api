<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/cliente', function (Request $request) {
    return $request->cliente();
});
//only 
//except 
Route::resource('cliente','ClientesController',['only'=>['index','show']]);
Route::resource('estado','EstadosController',['only'=>['index','show']]);
Route::resource('experiencia_laboral','Experiencias_laboralesController',['only'=>['index','show']]);
Route::resource('titulo_academico','Titulos_academicosController',['only'=>['index','show']]);
