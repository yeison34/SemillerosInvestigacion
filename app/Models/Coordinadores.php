<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinadores extends Model
{
    protected $table='programa';
    protected $primaryKey='id';
    public $timestamps=true;

    function facultad(){
        return $this -> belongsTo(Facultad::class, 'idfacultad');
    }
}