<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HistorialEntrega extends Model
{
    use HasFactory;

    protected $table = 'historial_entregas';
    /**
     * Get the usuario that owns the HistorialEntrega
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'usuario_id', 'id');
    }

    public function materiales(): BelongsTo
    {
        return $this->belongsTo(Material::class, 'material_id', 'id');
    }


}
