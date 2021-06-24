<?php

namespace App\Repositories;

use App\Models\RegistroDeActividades;
use App\Repositories\BaseRepository;

/**
 * Class RegistroDeActividadesRepository
 * @package App\Repositories
 * @version May 23, 2021, 7:39 pm UTC
*/

class RegistroDeActividadesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cli_id',
        'srv_id',
        'rgt_tipo_contrato',
        'rgt_servicio_contratado',
        'rgt_inicio_contrato',
        'rgt_fecha_facturar'
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
        return RegistroDeActividades::class;
    }
}
