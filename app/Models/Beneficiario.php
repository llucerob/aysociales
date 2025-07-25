<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;  

class Beneficiario extends Model
{
    /**
     * Get the registrosocial that owns the Beneficiario
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    
    public function registrosocial(): BelongsTo
    {
        return $this->belongsTo(Registrosocial::class, 'registrosociales_id', 'id');
    }
    

    /**
     * las solicitudes hechas por el beneficiario a traves de un pivote
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function solicitudes(): BelongsToMany
    {
        return $this->belongsToMany(Material::class, 'solicitudes',  'beneficiario_id', 'materiales_id')
                    ->as('solicitudes')
                    ->withPivot('cantidad', 'medida', 'entregado','id', 'domicilio', 'comentario', 'atendido' )
                    ->withTimestamps();

    }
    /**
     * las solicitudes hechas por el beneficiario a traves de un pivote
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function entregados(): BelongsToMany
    {
        return $this->belongsToMany(Material::class, 'entregados',  'beneficiario_id', 'materiales_id')
                    ->as('entregados')
                    ->withPivot('cantidad', 'medida', 'domicilio', 'comentario', 'atendido' )
                    ->withTimestamps();

    }

   /**
    * Get the user associated with the Beneficiario
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */
   public function cuenta(): HasOne
   {
       return $this->hasOne(CuentaBancaria::class, 'beneficiario_id', 'id')->withDefault(['banco' => '00',
                                                                                          'tipocuenta' => '00',
                                                                                          'numerocuenta' => '00']);
   }   
   
   /**
    * Get all of the comments for the Beneficiario
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function devoluciones(): HasMany
   {
       return $this->hasMany(Reembolso::class, 'beneficiarios_id', 'id');
   }

 /**
  * Get all of the comments for the Beneficiario
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasMany
  */
    public function situaciones(): HasMany
    {
     return $this->hasMany(Situacion::class, 'beneficiario_id', 'id');
     }
}
