<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departamentos extends Model
{
    protected $table = 'departamento';
    protected $primaryKey = 'id';
    public function paises(){
        return $this -> belongsTo(paises::class, 'idpais');
    }
    public $timestamps = true;
}
