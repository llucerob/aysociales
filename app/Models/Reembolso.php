<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reembolso extends Model
{
    use HasFactory;
    protected $table = 'Reembolso';

    protected function reembolso():BelongsTo
    {
        return $this->belongsTo(User::class, 'usuario_id    ');
    }

}
