<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormacionacademicaModel extends Model
{
    
    protected $table='formacionacademica';
    protected $primaryKey='id';
    public $timestamps=true;

    function nivelestudio(){
        return $this -> belongsTo(NivelestudioModel::class, 'idnivelestudio');
    }
    function estadoformacion(){
        return $this -> belongsTo(EstadoformacionModel::class, 'idestadoformacion');
    }
    function institucionformacion(){
        return $this -> belongsTo(InstitucionformacionModel::class, 'idinstitucionformacion');
    }
    function titulo(){
        return $this -> belongsTo(TituloModel::class, 'idtitulo');
    }

}