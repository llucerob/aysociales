<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;

    public function usuario() {
        return $this->belongsTo(Material::class,'solicitudes', 'usuario_id','materiales_id')
        -> as ('solicitudes')
        -> whitpivot('cantidad','medida','comentario','entrega','atendido');


    }




}
