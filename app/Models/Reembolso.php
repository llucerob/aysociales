<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reembolso extends Model
{
    use HasFactory;
    protected $table = 'Reembolso';

    protected function reembolso()
    {
        return $this->belongsTo(User::class, 'usuario_id    ');
    }

}
