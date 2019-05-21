<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipo_tarefa extends Model
{
    use SoftDeletes;
    public function tarefa(){
        return $this->hasMany('App\Tarefa');
    }
}
