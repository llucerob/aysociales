<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reembolso extends Model
{
    use HasFactory;
    protected $table = 'reembolsos';

    protected function usuario():BelongsTo
    {
        return $this->belongsTo(Usuario::class, 'usuario_id', 'id');
    }

    /**
     * Get all of the comments for the Reembolso
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function boletas(): HasMany
    {
        return $this->hasMany(Boleta::class, 'reembolso_id', 'id');
    }



}
