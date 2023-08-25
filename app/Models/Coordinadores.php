<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinadores extends Model
{
    protected $table='coordinadores';
    protected $primaryKey='id';
    public $timestamps=true;

    function sede(){
        return $this -> belongsTo(SedesModel::class, 'idsede');
    }
    function persona(){
        return $this -> belongsTo(PersonaModel::class, 'idpersona');
    }
    function programa(){
        return $this -> belongsTo(Programa::class, 'idprograma');
    }
    function semillero(){
        return $this -> belongsTo(SemilleroModel::class, 'idsemillero');
    }
}