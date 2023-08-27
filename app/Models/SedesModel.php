<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SedesModel extends Model
{
    protected $table = 'sedes';
    protected $primaryKey = 'id';
    public $timestamps = true;
    
    public function ciudad()
    {
        return $this->belongsTo(CiudadModel::class, 'idciudad');
    }
}