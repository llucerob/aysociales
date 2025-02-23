<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';

    public function users():BelongsToMany
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
    
}
