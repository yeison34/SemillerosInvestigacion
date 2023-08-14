<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semillero extends Model
{
    protected $table='semillero';
    protected $primaryKey='id';
    public $timestamps=true;

    function sede(){
        return $this -> belongsTo(SedesModel::class, 'idsede');
    }
}