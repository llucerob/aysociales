<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Situacion extends Model
{
    use HasFactory;
    protected $table = 'Situacion';



    public function situacion ():BelongsTo
    {
        return $this->belongsTo(User::class,'usuario_id');

    }
}
