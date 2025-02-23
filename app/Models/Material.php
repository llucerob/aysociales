<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Material extends Model
{
    use HasFactory;
    protected $table = 'materiales';

    public function categoria():BelongsTo
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}




