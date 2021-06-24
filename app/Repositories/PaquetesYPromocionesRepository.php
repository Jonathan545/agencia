<?php

namespace App\Repositories;

use App\Models\PaquetesYPromociones;
use App\Repositories\BaseRepository;

/**
 * Class PaquetesYPromocionesRepository
 * @package App\Repositories
 * @version May 23, 2021, 7:38 pm UTC
*/

class PaquetesYPromocionesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'srv_id',
        'prom_descuentos',
        'prom_planes_prepago',
        'prom_planes_pospago',
        'prom_combos_bonos',
        'prom_celulares_promocion'
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
        return PaquetesYPromociones::class;
    }
}
