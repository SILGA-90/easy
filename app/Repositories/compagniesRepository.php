<?php

namespace App\Repositories;

use App\Models\compagnies;
use App\Repositories\BaseRepository;

/**
 * Class compagniesRepository
 * @package App\Repositories
 * @version May 20, 2021, 12:20 pm UTC
*/

class compagniesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'comp_name',
        'comp_code',
        'image',
        'comp_statut'
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
        return compagnies::class;
    }
}
