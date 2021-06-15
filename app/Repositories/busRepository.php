<?php

namespace App\Repositories;

use App\Models\bus;
use App\Repositories\BaseRepository;

/**
 * Class busRepository
 * @package App\Repositories
 * @version May 18, 2021, 8:04 pm UTC
*/

class busRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bus_marque',
        'bus_number',
        'bus_type',
        'total_place',
        // 'place_dispo',
        'image',
        'bus_statut',
        'chauf_id',
        'comp_id'
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
        return bus::class;
    }
}
