<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = ['login', 'nome', 'cpf', 'email', 'endereco', 'senha'];
    public $timestamps = false;
}
