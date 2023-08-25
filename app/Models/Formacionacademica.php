<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formacionacademica extends Model
{
    
    protected $table='formacionacademica';
    protected $primaryKey='id';
    public $timestamps=true;

    function nivelestudio(){
        return $this -> belongsTo(Nivelestudio::class, 'idnivelestudio');
    }
    function estadoformacion(){
        return $this -> belongsTo(Estadoformacion::class, 'idestadoformacion');
    }
    function institucionformacion(){
        return $this -> belongsTo(Institucionformacion::class, 'idinstitucionformacion');
    }
    function titulo(){
        return $this -> belongsTo(Titulo::class, 'idtitulo');
    }
}