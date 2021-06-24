<?php

namespace App\Repositories;

use App\User;
use App\Repositories\BaseRepository;

/**
 * Class PaquetesYPromocionesRepository
 * @package App\Repositories
 * @version May 23, 2021, 7:38 pm UTC
*/

class Personas extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password',
        'cli_telefono',
        'cli_correo',
        'cli_cedula',
        'cli_genero',
        'cli_direccion',
        'cli_tipo',
        'cli_estadocivil',
        'cli_usuario',
        'cli_fenac'
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
        return Personas::class;
    }
}
