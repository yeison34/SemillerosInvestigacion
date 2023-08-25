<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoModel extends Model
{
    protected $table='proyecto';
    protected $primaryKey='id';
    public $timestamps=true;

    function tipoproyecto(){
        return $this -> belongsTo(TipoproyectoModel::class, 'idtipoproyecto');
    }

    function estadoproyecto(){
        return $this -> belongsTo(EstadoproyectoModel::class, 'idestadoproyecto');
    }
}