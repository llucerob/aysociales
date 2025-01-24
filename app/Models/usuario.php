<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Usuario extends Model
{
    use HasFactory;
    protected $table= 'usuarios';

    public function usuario():BelongsTo 
    {
        return $this->belongsTo(Material::class,'solicitudes', 'usuario_id','materiales_id')
        -> as ('solicitudes')
        -> whitpivot('cantidad','medida','comentario','entrega','atendido');


    }




}
