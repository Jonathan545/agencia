<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Nosotros
 * @package App\Models
 * @version May 23, 2021, 6:24 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $facturas
 * @property \Illuminate\Database\Eloquent\Collection $trabajadores
 * @property string $ent_rep_legal
 * @property string $ent_nombre_entidad
 * @property string $ent_ubicacion
 * @property string $ent_correo
 * @property integer $ent_telefono
 * @property string $ent_sitio_web
 */
class Nosotros extends Model
{


    public $table = 'entidad';
    protected $primaryKey='ent_id';
    public $timestamps=false;

    




    public $fillable = [
        'ent_rep_legal',
        'ent_nombre_entidad',
        'ent_ubicacion',
        'ent_correo',
        'ent_telefono',
        'ent_sitio_web'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ent_id' => 'integer',
        'ent_rep_legal' => 'string',
        'ent_nombre_entidad' => 'string',
        'ent_ubicacion' => 'string',
        'ent_correo' => 'string',
        'ent_telefono' => 'string',
        'ent_sitio_web' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ent_rep_legal' => 'nullable|string|max:100',
        'ent_nombre_entidad' => 'nullable|string|max:100',
        'ent_ubicacion' => 'nullable|string|max:100',
        'ent_correo' => 'nullable|string|max:100',
        'ent_telefono' => 'nullable|string|max:100',
        'ent_sitio_web' => 'nullable|string|max:100'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function facturas()
    {
        return $this->hasMany(\App\Models\Factura::class, 'ent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function trabajadores()
    {
        return $this->hasMany(\App\Models\Trabajadore::class, 'ent_id');
    }
}
