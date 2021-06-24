<?php

namespace App\Repositories;

use App\Models\Servicios;
use App\Repositories\BaseRepository;

/**
 * Class ServiciosRepository
 * @package App\Repositories
 * @version June 8, 2021, 11:14 pm UTC
*/

class ServiciosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'trab_id',
        'srv_tipo_servicio'
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
        return Servicios::class;
    }
}
