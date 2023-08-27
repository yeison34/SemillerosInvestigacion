<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CiudadModel extends Model
{
    protected $table = 'ciudad';
    protected $primaryKey = 'id';
    public $timestamps = true;
    
    function departamento(){
        return $this -> belongsTo(Departamentos::class, 'iddepartamento');
    }
}