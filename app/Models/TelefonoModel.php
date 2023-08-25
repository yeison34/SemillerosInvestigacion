<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelefonoModel extends Model
{
    protected $table = 'Telefono';
    protected $primaryKey = 'id';
    public $timestamps = true;
    
    public function persona(){
        return $this -> belongsTo(PersonaModel::class, 'idpersona');
    }
}