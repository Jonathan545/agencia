<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Trabajadores
 * @package App\Models
 * @version May 23, 2021, 9:07 pm UTC
 *
 * @property \App\Models\Entidad $ent
 * @property \Illuminate\Database\Eloquent\Collection $callCenters
 * @property \Illuminate\Database\Eloquent\Collection $callCenter1s
 * @property integer $ent_id
 * @property string $trab_nombres
 * @property string $trab_apellidos
 * @property integer $trab_genero
 * @property integer $trab_estado_civil
 * @property string $trab_telefono
 * @property string $trab_correo
 * @property string $trab_cedula
 * @property string $trab_rol_trabajo
 */
class Trabajadores extends Model
{
   
    public $table = 'trabajadores';
    protected $primaryKey='trab_id';
    public $timestamps=false;
    




    public $fillable = [
        'ent_id',
        'trab_nombres',
        'trab_apellidos',
        'trab_genero',
        'trab_estado_civil',
        'trab_telefono',
        'trab_correo',
        'trab_cedula',
        'trab_rol_trabajo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'trab_id' => 'integer',
        'ent_id' => 'integer',
        'trab_nombres' => 'string',
        'trab_apellidos' => 'string',
        'trab_genero' => 'string',
        'trab_estado_civil' => 'string',
        'trab_telefono' => 'string',
        'trab_correo' => 'string',
        'trab_cedula' => 'string',
        'trab_rol_trabajo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ent_id' => 'nullable|integer',
        'trab_nombres' => 'nullable|string|max:100',
        'trab_apellidos' => 'nullable|string|max:100',
        'trab_genero' => 'nullable|string|max:100',
        'trab_estado_civil' => 'nullable|string|max:100',
        'trab_telefono' => 'nullable|string|max:10',
        'trab_correo' => 'nullable|string|max:100',
        'trab_cedula' => 'nullable|string|max:13',
        'trab_rol_trabajo' => 'nullable|string|max:100'
    ];

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
    public function callCenters()
    {
        return $this->hasMany(\App\Models\CallCenter::class, 'trab_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function callCenter1s()
    {
        return $this->belongsToMany(\App\Models\CallCenter::class, 'servicio_prestado');
    }
}
