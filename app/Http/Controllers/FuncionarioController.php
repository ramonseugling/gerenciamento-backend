<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Http\Requests\StoreUpdateFuncionarioRequest;

class FuncionarioController extends Controller
{
    public function index()
    {
        return Funcionario::all();
    }

    // Função chamada na criação das empresas (Recebe como parâmetro  a requisição enviado pelo front)
    public function store(StoreUpdateFuncionarioRequest $request)
    {
        return Funcionario::create($request->all());
    }

    // Função chamada na listagem das empresas (Recebe como parâmetro o id enviado pelo front)
    public function show($id)
    {
        return Funcionario::find($id);
    }

    // Função chamada na edição das empresas (Recebe como parâmetro  a requisição enviado pelo front, e o id)
    public function update(StoreUpdateFuncionarioRequest $request, $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->all());
        return $funcionario;
    }

    // Função chamada na deleção das empresas (Recebe como parâmetro  a requisição enviado pelo front, e o id)
    public function delete(Request $request, $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();

        return 204;
    }
}
