<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    protected $fillable = ['nome','email','telefone','celular','dtnacimento','cep','logradouro','numero','complemento','bairro','cidade','uf'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'visitante';
}
