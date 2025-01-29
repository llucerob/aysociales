<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';


     public function registrosocial(): BelongsTo
     {
         return $this->belongsTo(Registrosocial::class, 'registro_social_id', 'id');
     }
     
 
     
     public function solicitudes(): BelongsToMany
     {
         return $this->belongsToMany(Material::class, 'solicitudes',  'usuario_id', 'material_id')
                     ->as('solicitudes')
                     ->withPivot('cantidad', 'medida', 'comentario', 'entrega',  'atendido' )
                     ->withTimestamps();
 
     }
     /**
      * las solicitudes hechas por el beneficiario a traves de un pivote
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
      */
     public function historial(): BelongsToMany
     {
         return $this->belongsToMany(Material::class, 'historial_entregas',  'usuario_id', 'material_id')
                     ->as('entregados')
                     ->withPivot('cantidad', 'medida', 'comentario_solicitud','entrega', 'atendido','estado', 'cerrado')
                     ->withTimestamps();
 
     }
 
    /**
     * Get the user associated with the Beneficiario
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cuenta(): HasOne
    {
        return $this->hasOne(CuentaBancaria::class, 'usuario_id', 'id')->withDefault(['banco' => '00',
                                                                                           'tipocuenta' => '00',
                                                                                           'numerocuenta' => '00']);
    }   
    
    /**
     * Get all of the comments for the Beneficiario
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reembolsos(): HasMany
    {
        return $this->hasMany(Reembolso::class, 'usuario_id', 'id');
    }
 
  /**
   * Get all of the comments for the Beneficiario
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
     public function situaciones(): HasMany
     {
      return $this->hasMany(Situacion::class, 'usuario_id', 'id');
      }
}
