<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CuentaBancaria extends Model
{
    use HasFactory;

    protected $table = 'CuentaBancaria';

    public function cuenta():BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'Usuario_id','id');
    }
}


