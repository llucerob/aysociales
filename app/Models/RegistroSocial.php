<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RegistroSocial extends Model
{
    use HasFactory;

    protected $table = 'registros_sociales';

    protected $guarded = ['folioid'];

    
    public function usuarios(): HasMany
    {
        return $this->hasMany(Usuario::class, 'registro_social_id', 'id');
    }


}
