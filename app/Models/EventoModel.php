<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventoModel extends Model
{
    protected $table = 'evento';
    protected $primaryKey = 'id';
    public $timestamps = true;
    
    public function tipoevento(){
        return $this -> belongsTo(TipoeventoModel::class, 'idtipoevento');
    }
    public function clasificacionevento(){
        return $this -> belongsTo(ClasificacioneventoModel::class, 'idclasificacionevento');
    }
    public function modalidadevento(){
        return $this -> belongsTo(ModalidadeventoModel::class, 'idmodalidadevento');
    }
}