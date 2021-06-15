<?php

namespace App\Repositories;

use App\Models\arrivalcity;
use App\Repositories\BaseRepository;

/**
 * Class arrivalcityRepository
 * @package App\Repositories
 * @version June 6, 2021, 2:15 pm UTC
*/

class arrivalcityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'acity_name'
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
        return arrivalcity::class;
    }
}
