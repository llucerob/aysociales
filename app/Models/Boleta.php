<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Boleta extends Model
{
    use HasFactory;
    protected $table = 'boletas';
    protected $guarded = 'id';



    public function Reembolsos(): BelongsTo
    {
        return $this->belonsTo(reembolso::class, 'reembolsos_id', 'id');
    }
}
