<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['razao_social','nome_fantasia','cnpj','conta_id'];
}
