<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    protected $table='titulo';
    protected $primaryKey='id';
    public $timestamps=true;

    function nivelestudio(){
        return $this -> belongsTo(Nivelestudio::class, 'idnivelestudio');
    }
}