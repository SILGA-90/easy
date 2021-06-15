<?php

namespace App\Repositories;

use App\Models\tickets;
use App\Repositories\BaseRepository;

/**
 * Class ticketsRepository
 * @package App\Repositories
 * @version May 18, 2021, 8:05 pm UTC
*/

class ticketsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tick_type',
        'tick_statut',
        'place_choisie',
        'bus_id',
        'it_id'
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
        return tickets::class;
    }
}
