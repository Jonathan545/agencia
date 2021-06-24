<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CentroDeLlamadas
 * @package App\Models
 * @version May 23, 2021, 7:41 pm UTC
 *
 * @property \App\Models\Trabajadore $trab
 * @property \App\Models\User $cli
 * @property \App\Models\PaquetesYPromocione $prom
 * @property \Illuminate\Database\Eloquent\Collection $trabajadore1s
 * @property integer $cli_id
 * @property integer $prom_id
 * @property integer $trab_id
 * @property string $call_ayuda_cliente
 * @property string $call_contrato_servicios
 * @property string $call_servicios_tecnicos
 * @property string $call_soluciones_problemas
 * @property string $call_puntos_pago
 */
class CentroDeLlamadas extends Model
{


    public $table = 'call_center';
    
    protected $primaryKey='call_id';
    public $timestamps=false;



    public $fillable = [
        'cli_id',
        'prom_id',
        'trab_id',
        'call_ayuda_cliente',
        'call_contrato_servicios',
        'call_servicios_tecnicos',
        'call_soluciones_problemas',
        'call_puntos_pago'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'call_id' => 'integer',
        'cli_id' => 'integer',
        'prom_id' => 'integer',
        'trab_id' => 'integer',
        'call_ayuda_cliente' => 'string',
        'call_contrato_servicios' => 'string',
        'call_servicios_tecnicos' => 'string',
        'call_soluciones_problemas' => 'string',
        'call_puntos_pago' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cli_id' => 'nullable|integer',
        'prom_id' => 'nullable|integer',
        'trab_id' => 'nullable|integer',
        'call_ayuda_cliente' => 'nullable|string|max:100',
        'call_contrato_servicios' => 'nullable|string|max:100',
        'call_servicios_tecnicos' => 'nullable|string|max:100',
        'call_soluciones_problemas' => 'nullable|string|max:100',
        'call_puntos_pago' => 'nullable|string|max:100'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function trab()
    {
        return $this->belongsTo(\App\Models\Trabajadore::class, 'trab_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cli()
    {
        return $this->belongsTo(\App\Models\User::class, 'cli_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function prom()
    {
        return $this->belongsTo(\App\Models\PaquetesYPromocione::class, 'prom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function trabajadore1s()
    {
        return $this->belongsToMany(\App\Models\Trabajadore::class, 'servicio_prestado');
    }
}
