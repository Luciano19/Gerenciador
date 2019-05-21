<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarefa extends Model
{
    use SoftDeletes;
    public function tipo_tarefa(){
        return $this->belongsTo('App\Tipo_tarefa');
    }
}
