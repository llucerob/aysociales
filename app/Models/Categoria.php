<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Categoria extends Model
{
    protected $table = 'categorias';


    /**
     * asociar la categoria del material
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materiales(): HasOne
    {
        return $this->hasOne(Material::class, 'categoria_id', 'id');
    }

   
}
