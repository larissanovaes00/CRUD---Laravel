<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model {
    protected $table = 'movies'; //nome da tabela//
    protected $primaryKey = 'id'; // ID chave primária //
}

?>