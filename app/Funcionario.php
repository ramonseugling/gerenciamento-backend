<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Modelo de um Funcionário, com suas variáveis: login,nome, cpf, e-mail, endereço e senha.
class Funcionario extends Model
{
    protected $fillable = ['login', 'nome', 'cpf', 'email', 'endereco', 'senha'];
    public $timestamps = false;

    public function empresas()
    {
        return $this->belongsToMany(Empresa::class);
    }
}


