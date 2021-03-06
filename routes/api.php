<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Registro das rotas API da aplicação.

//Rotas de funcionário
Route::get('funcionario', 'FuncionarioController@index');
Route::get('funcionario/{id}', 'FuncionarioController@show');
Route::post('funcionario', 'FuncionarioController@store');
Route::put('funcionario/{id}', 'FuncionarioController@update');
Route::delete('funcionario/{id}', 'FuncionarioController@delete');

//Rotas de empresa
Route::get('empresa', 'EmpresaController@index');
Route::get('empresa/{id}', 'EmpresaController@show');
Route::post('empresa', 'EmpresaController@store');
Route::put('empresa/{id}', 'EmpresaController@update');
Route::delete('empresa/{id}', 'EmpresaController@delete');
Route::post('empresa/{id}/add-funcionario', 'EmpresaController@addFuncionario');


