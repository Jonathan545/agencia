<?php

namespace App\Repositories;

use App\Models\Trabajadores;
use App\Repositories\BaseRepository;

/**
 * Class TrabajadoresRepository
 * @package App\Repositories
 * @version May 23, 2021, 9:07 pm UTC
*/

class TrabajadoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Trabajadores::class;
    }
}
