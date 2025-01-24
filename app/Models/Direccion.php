<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Direccion extends Model
{
    use HasFactory;

    protected $table = 'Direccion';

    public function direccion():BelongsTo
    {
        return $this->belongsTo(usuario::class, 'usuario_id','id');
    }

    protected $casts = [
        'latitud' => 'float',
        'longitud' => 'float',
    ];
}
