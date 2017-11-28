<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = ['nome', 'areaAtuacao', 'cidade', 'estado', 'cidade', 'regiao', 'cnpj', 'telefone', 'email'];
}
