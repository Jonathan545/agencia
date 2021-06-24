<?php

namespace App\Repositories;

use App\Models\FacturaDetalles;
use App\Repositories\BaseRepository;

/**
 * Class FacturaDetallesRepository
 * @package App\Repositories
 * @version May 26, 2021, 9:49 pm UTC
*/

class FacturaDetallesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fac_id',
        'srv_id',

        'fac_tipo_pago',
        'fadet_cant',
        'fadet_valor',
        
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
        return FacturaDetalles::class;
    }
}
