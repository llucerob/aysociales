<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = ['rut'];

    public function material()
    {
        return $this->belongsToMany(Material::class, 'solicitudes', 'usuario_id', 'materiales_id')
                    ->as('solicitudes')
                    ->withPivot('cantidad', 'medida', 'comentario', 'entrega', 'atendido');
    }

    public function historialEntregas()
    {
        return $this->belongsToMany(Material::class, 'historial_entregas', 'usuario_id', 'materiales_id')
                    ->withPivot('cantidad', 'medida', 'comentario', 'entrega', 'atendido', 'estado', 'cerrado');
    }

    # Mutador eliminar puntos y guión del rut
    public function setRutAttribute($value)
    {
        $this->attributes['rut'] = str_replace(['.', '-'], '', $value);
    }
}
