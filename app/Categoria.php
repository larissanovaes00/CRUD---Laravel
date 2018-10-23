<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

    //public $timestamps = false;

    const CREATED_AT = 'created_at';   // função para colocar um default nos demais campos da DB
    const UPDATED_AT = 'updated_at';  // como estes campos do DB não estão no formulário ás vezes dá erro

    protected $table = 'genres'; //nome da tabela//
    protected $primaryKey = 'id'; // ID chave primária //
    protected $fillable = ['name', 'ranking']; //só para forms - permissão para incluir
}

?>