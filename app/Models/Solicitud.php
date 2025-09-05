<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Solicitud extends Model
{
    protected $table = 'solicitudes';

    public function beneficiario(): BelongsTo
    {
        return $this->belongsTo(Beneficiario::class, 'beneficiario_id', 'id');
    }

    /**
     * Get the material that owns the Entregado
     *
     * @return \Illuminate\Materialbase\Eloqumateriales_idns\BelongsTo
     */
    public function material(): BelongsTo
    {
        return $this->belongsTo(Material::class,  'materiales_id', 'id');
    }
}
