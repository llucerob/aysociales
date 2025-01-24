<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Situacion extends Model
{
    use HasFactory;
    protected $table = 'Situacion';



    public function situacion ()
    {
        return $this->belongsTo(Usuario::class,'usuario_id');

    }
}
