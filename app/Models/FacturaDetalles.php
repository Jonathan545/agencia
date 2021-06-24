<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FacturaDetalles
 * @package App\Models
 * @version May 26, 2021, 9:49 pm UTC
 *
 * @property \App\Models\Factura $fac
 * @property integer $fac_id
 * @property integer $fac_tipo_pago
 * @property string $fac_descripcion
 * @property string $fac_valor_servicio
 * @property integer $fac_descuento
 * @property integer $fac_iva
 * @property integer $fac_total
 */
class FacturaDetalles extends Model
{
   

    public $table = 'factura_detalles';
      protected $primaryKey='fadet_id';
    public $timestamps=false;
    
   



    public $fillable = [
        'fac_id',
         'srv_id',
        'fac_tipo_pago',
        'fadet_valor',
        'fadet_cant'
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fadet_id' => 'integer',
        'fac_id' => 'integer',
        'srv_id'=> 'integer',
        'fac_tipo_pago' => 'integer',
        'fadet_cant' => 'numeric',
        'fadet_valor' => 'numeric'
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fac_id' => 'integer',
        // 'fac_id' => 'nullable|integer',
        
        // 'fac_tipo_pago' => 'nullable|integer',
        // 'fadet_cant' => 'numeric',
        // 'fadet_valor' => 'numeric',
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function fac()
    {
        return $this->belongsTo(\App\Models\Factura::class, 'fac_id');
    }
}
