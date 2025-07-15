<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroSocial extends Model
{
    protected $table = 'rshs';

    /**
     * Get the user associated with the Registrosocial
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function beneficiarios(): HasMany
    {
        return $this->hasMany(Beneficiario::class, 'registrosociales_id', 'id');
    }
}
