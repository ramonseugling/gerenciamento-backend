<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Funcionario;

class EmpresaController extends Controller
{
    public function index(){
        return Empresa::all();
    }

    public function show($id){
        return Empresa::find($id);
    }

    public function store(Request $request){
        return Empresa::create($request->all());
    }

    public function update(Request $request, $id){
        $empresa = Empresa::findOrFail($id);
        $empresa->update($request->all());

        return $empresa;
    }

    public function delete(Request $request, $id){
        $empresa = Empresa::findOrFail($id);
        $empresa->delete();

        return 204;
    }

    public function addFuncionario(Request $request, $id) {
        // $funcionarioBuscado = Funcionario::where('cpf', '=', $request->cpf)->firstOrFail();
        $empresaBuscada = Empresa::find($id);
        $funcionarioAdicionado = $empresaBuscada->funcionarios()->create([
            'nome' => $request->nome,
            'login' => $request->login,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'endereco' => $request->endereco,
            'senha' => $request->senha
        ]);

        return $funcionarioAdicionado;
    }

}
