<?php

namespace App\Repositories;

use App\Models\itineraires;
use App\Repositories\BaseRepository;

/**
 * Class itinerairesRepository
 * @package App\Repositories
 * @version June 6, 2021, 2:12 pm UTC
*/

class itinerairesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'it_statut',
        'departcity_id',
        'arrivalcity_id',
        'day_id',
        'time_id',
        'bus_id',
        'price_id',
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
        return itineraires::class;
    }
}
