<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialEntrega extends Model
{
    use HasFactory;

    protected $table = 'HistorialEntrega';

    public function registro()
    {
        return $this->belongsTo(Usuario::class,'usuarios', 'usuario_id')
        -> as ('historial');


    }





}
