<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $table = 'departamento';
    protected $primaryKey = 'id';
    public function paises(){
        return $this -> belongsTo(pais::class, 'idpais');
    }
    public $timestamps = true;
}
