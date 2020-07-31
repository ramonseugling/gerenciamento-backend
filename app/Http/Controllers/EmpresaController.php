<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

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

}
