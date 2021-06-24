<?php

namespace App\Repositories;

use App\Models\Nosotros;
use App\Repositories\BaseRepository;

/**
 * Class NosotrosRepository
 * @package App\Repositories
 * @version May 23, 2021, 6:24 pm UTC
*/

class NosotrosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ent_rep_legal',
        'ent_nombre_entidad',
        'ent_ubicacion',
        'ent_correo',
        'ent_telefono',
        'ent_sitio_web'
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
        return Nosotros::class;
    }
}
