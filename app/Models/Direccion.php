<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    protected $table = 'Direccion';

    public function direccion()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id','id');
    }

    protected $casts = [
        'latitud' => 'float',
        'longitud' => 'float',
    ];
}
