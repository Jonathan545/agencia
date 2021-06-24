<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PaquetesYPromociones
 * @package App\Models
 * @version May 23, 2021, 7:38 pm UTC
 *
 * @property \App\Models\ServicioPrestado $srv
 * @property \Illuminate\Database\Eloquent\Collection $callCenters
 * @property integer $srv_id
 * @property string $prom_descuentos
 * @property string $prom_planes_prepago
 * @property string $prom_planes_pospago
 * @property string $prom_combos_bonos
 * @property string $prom_celulares_promocion
 */
class PaquetesYPromociones extends Model
{


    public $table = 'paquetes_y_promociones';
    
   protected $primaryKey='prom_id';
    public $timestamps=false;



    public $fillable = [
        'srv_id',
        'prom_descuentos',
        'prom_planes_prepago',
        'prom_planes_pospago',
        'prom_combos_bonos',
        'prom_celulares_promocion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'prom_id' => 'integer',
        'srv_id' => 'integer',
        'prom_descuentos' => 'string',
        'prom_planes_prepago' => 'string',
        'prom_planes_pospago' => 'string',
        'prom_combos_bonos' => 'string',
        'prom_celulares_promocion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'srv_id' => 'nullable|integer',
        'prom_descuentos' => 'nullable|string|max:100',
        'prom_planes_prepago' => 'nullable|string|max:100',
        'prom_planes_pospago' => 'nullable|string|max:100',
        'prom_combos_bonos' => 'nullable|string|max:100',
        'prom_celulares_promocion' => 'nullable|string|max:100'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function srv()
    {
        return $this->belongsTo(\App\Models\ServicioPrestado::class, 'srv_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function callCenters()
    {
        return $this->hasMany(\App\Models\CallCenter::class, 'prom_id');
    }
}
