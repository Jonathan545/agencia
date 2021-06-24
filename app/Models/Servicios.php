<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Servicios
 * @package App\Models
 * @version June 8, 2021, 11:14 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $facturas
 * @property \Illuminate\Database\Eloquent\Collection $factura1s
 * @property \Illuminate\Database\Eloquent\Collection $paquetesYPromociones
 * @property \Illuminate\Database\Eloquent\Collection $users
 * @property integer $trab_id
 * @property string $srv_tipo_servicio
 */
class Servicios extends Model
{
  

    public $table = 'servicio_prestado';

    protected $primaryKey='srv_id';
    public $timestamps=false;

    
   



    public $fillable = [
        'trab_id',
        'srv_tipo_servicio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'srv_id' => 'integer',
        'trab_id' => 'integer',
        'srv_tipo_servicio' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'trab_id' => 'required|integer',
        'srv_tipo_servicio' => 'required|string|max:50'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function facturas()
    {
        return $this->hasMany(\App\Models\Factura::class, 'srv_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function factura1s()
    {
        return $this->belongsToMany(\App\Models\Factura::class, 'factura_detalles');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function paquetesYPromociones()
    {
        return $this->hasMany(\App\Models\PaquetesYPromocione::class, 'srv_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function users()
    {
        return $this->belongsToMany(\App\Models\User::class, 'registro_actividades');
    }
}
