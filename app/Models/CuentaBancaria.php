<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaBancaria extends Model
{
    use HasFactory;

    protected $table = 'CuentaBancaria';

    public function cuenta()
    {
        return $this->belongsTo(Usuario::class, 'Usuario_id','id');
    }
}


