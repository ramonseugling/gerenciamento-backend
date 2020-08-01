<?php

use Illuminate\Support\Facades\Route;
use App\Empresa;

Route::get('/', function() {

   $funcionarios = \App\Funcionario::first();

//    $funcionarios->empresas()->sync([
//        1 => [
//          'login' => 'jose'   
//        ]
       
//     ]);

    // dd($funcionarios->empresas->first()->pivot);

});

//Route::resource('funcionarios', 'FuncionarioController');









