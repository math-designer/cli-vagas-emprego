<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $fillable = ['empresa', 'descricao', 'quantidade'];
}
