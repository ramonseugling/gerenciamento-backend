<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['nome','cnpj','endereco'];
    public $timestamps = false;

    public function funcionarios()
    {
        return $this->belongsToMany(Funcionario::class);
    }
}

