<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atores extends Model {

    //public $timestamps = false;

    const CREATED_AT = 'created_at';   // função para colocar um default nos demais campos da DB
    const UPDATED_AT = 'updated_at';  // como estes campos do DB não estão no formulário ás vezes dá erro

    protected $table = 'actors'; //nome da tabela//
    protected $primaryKey = 'id'; // ID chave primária //
    protected $fillable = ['first_name', 'last_name', 'rating']; //só para forms - permissão para incluir
}

?>