<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Facturas
 * @package App\Models
 * @version May 26, 2021, 9:30 pm UTC
 *
 * @property \App\Models\ServicioPrestado $srv
 * @property \App\Models\User $cli
 * @property \App\Models\Entidad $ent
 * @property \Illuminate\Database\Eloquent\Collection $facturaDetalles
 * @property integer $cli_id
 * @property integer $ent_id
 * @property integer $srv_id
 * @property integer $fac_num_factura
 * @property string $fac_fecha
 */
class Facturas extends Model
{


    public $table = 'factura';
     protected $primaryKey='fac_id';
    public $timestamps=false;

    




    public $fillable = [
        'cli_id',
        'ent_id',
        'srv_id',
        'fac_num_factura',
        'fac_fecha',
        'fac_iva',
        'fac_descuento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fac_id' => 'integer',
        'cli_id' => 'integer',
        'ent_id' => 'integer',
        'srv_id' => 'integer',
        'fac_num_factura' => 'integer',
        'fac_fecha' => 'date',
        'fac_iva' => 'numeric',
        'fac_descuento' => 'numeric'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cli_id' => 'nullable|integer',
        'ent_id' => 'nullable|integer',
        'srv_id' => 'nullable|integer',
        'fac_num_factura' => 'nullable|integer',
        'fac_fecha' => 'nullable',
        'fac_iva' => 'nullable',
        'fac_descuento' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function srv()
    {
        return $this->belongsTo(\App\Models\ServicioPrestado::class, 'srv_id');
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
    public function ent()
    {
        return $this->belongsTo(\App\Models\Entidad::class, 'ent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function facturaDetalles()
    {
        return $this->hasMany(\App\Models\FacturaDetalle::class, 'fac_id');
    }
}
