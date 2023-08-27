<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public function persona(){
        return $this -> belongsTo(PersonaModel::class, 'idpersona');
    }
}
