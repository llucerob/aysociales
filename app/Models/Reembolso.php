<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Boleta;
use App\Models\Beneficiario;

class Reembolso extends Model
{
    protected $table = 'reembolsos';


    /**
     * Get the user that owns the Reembolso
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function beneficiario(): BelongsTo
    {
        return $this->belongsTo(Beneficiario::class, 'beneficiarios_id', 'id');
    }


    /**
     * Get all of the comments for the Reembolso
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function boletas(): HasMany
    {
        return $this->hasMany(Boleta::class, 'reembolsos_id', 'id');
    }
}
