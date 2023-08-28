<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolUsuarioModel extends Model
{
    protected $table='rol_usuario';
    protected $primaryKey='id';
    public $timestamps=true;
    public function rol(){
        return $this -> belongsTo(RolModel::class, 'idrol');
    }
}
