<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Http\Requests\StoreUpdateEmpresaRequest;

class EmpresaController extends Controller
{
    public function index(){
        return Empresa::all();
    }

    // Função chamada na listagem das empresas (Recebe como parâmetro o id enviado pelo front)
    public function show($id){
        return Empresa::find($id);
    }

    // Função chamada na criação das empresas (Recebe como parâmetro  a requisição enviado pelo front)
    public function store(StoreUpdateEmpresaRequest $request){
        return Empresa::create($request->all());
    }
   
    // Função chamada na edição das empresas (Recebe como parâmetro  a requisição enviado pelo front, e o id)
    public function update(StoreUpdateEmpresaRequest $request, $id){
        $empresa = Empresa::findOrFail($id);
        $empresa->update($request->all());

        return $empresa;
    }
    
    // Função chamada na deleção das empresas (Recebe como parâmetro  a requisição enviado pelo front, e o id)
    public function delete(Request $request, $id){
        $empresa = Empresa::findOrFail($id);
        $empresa->delete();

        return 204;
    }

}
