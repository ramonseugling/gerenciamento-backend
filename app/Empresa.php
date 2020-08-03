<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Modelo de uma Empresa, com suas variáveis: nome, cnpj e endereço.
class Empresa extends Model
{
    protected $fillable = ['nome','cnpj','endereco'];
    public $timestamps = false;

    public function funcionarios()
    {
        return $this->belongsToMany(Funcionario::class);
    }
}

