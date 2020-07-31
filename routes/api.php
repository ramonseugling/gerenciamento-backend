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
Route::get('funcionario', 'FuncionarioController@index');
Route::get('funcionario/{id}', 'FuncionarioController@show');
Route::post('funcionario', 'FuncionarioController@store');
Route::put('funcionario/{id}', 'FuncionarioController@update');
Route::delete('funcionario/{id}', 'FuncionarioController@delete');

Route::get('empresa', 'EmpresaController@index');
Route::get('empresa/{id}', 'EmpresaController@show');
Route::post('empresa', 'EmpresaController@store');
Route::put('empresa/{id}', 'EmpresaController@update');
Route::delete('empresa/{id}', 'EmpresaController@delete');

