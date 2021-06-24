<?php

namespace App\Repositories;

use App\Models\CentroDeLlamadas;
use App\Repositories\BaseRepository;

/**
 * Class CentroDeLlamadasRepository
 * @package App\Repositories
 * @version May 23, 2021, 7:41 pm UTC
*/

class CentroDeLlamadasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cli_id',
        'prom_id',
        'trab_id',
        'call_ayuda_cliente',
        'call_contrato_servicios',
        'call_servicios_tecnicos',
        'call_soluciones_problemas',
        'call_puntos_pago'
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
        return CentroDeLlamadas::class;
    }
}
