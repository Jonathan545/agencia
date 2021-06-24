<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RegistroDeActividades
 * @package App\Models
 * @version May 23, 2021, 7:39 pm UTC
 *
 * @property \App\Models\User $cli
 * @property \App\Models\ServicioPrestado $srv
 * @property integer $cli_id
 * @property integer $srv_id
 * @property string $rgt_tipo_contrato
 * @property string $rgt_servicio_contratado
 * @property string $rgt_inicio_contrato
 * @property string $rgt_fecha_facturar
 */
class RegistroDeActividades extends Model
{
 

    public $table = 'registro_actividades';
    
    protected $primaryKey='rgt_id';
    public $timestamps=false;



    public $fillable = [
        'cli_id',
        'srv_id',
        'rgt_tipo_contrato',
        'rgt_servicio_contratado',
        'rgt_inicio_contrato',
        'rgt_fecha_facturar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'rgt_id' => 'integer',
        'cli_id' => 'integer',
        'srv_id' => 'integer',
        'rgt_tipo_contrato' => 'string',
        'rgt_servicio_contratado' => 'string',
        'rgt_inicio_contrato' => 'date',
        'rgt_fecha_facturar' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cli_id' => 'nullable|integer',
        'srv_id' => 'nullable|integer',
        'rgt_tipo_contrato' => 'nullable|string|max:100',
        'rgt_servicio_contratado' => 'nullable|string|max:100',
        'rgt_inicio_contrato' => 'nullable',
        'rgt_fecha_facturar' => 'nullable'
    ];

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
    public function srv()
    {
        return $this->belongsTo(\App\Models\ServicioPrestado::class, 'srv_id');
    }
}
