<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonaModel extends Model
{
    protected $table='persona';
    protected $primaryKey='id';
    public $timestamps=true;

    function tipoidentificacion(){
        return $this -> belongsTo(TipoidentificacionModel::class, 'idtipoidentificacion');
    }
    function ciudad(){
        return $this -> belongsTo(CiudadModel::class, 'idciudad');
    }
    function persona(){
        return $this -> belongsTo(PersonaModel::class, 'idpersona');
    }
}