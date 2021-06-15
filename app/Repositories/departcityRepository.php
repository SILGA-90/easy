<?php

namespace App\Repositories;

use App\Models\departcity;
use App\Repositories\BaseRepository;

/**
 * Class departcityRepository
 * @package App\Repositories
 * @version June 6, 2021, 2:14 pm UTC
*/

class departcityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dcity_name'
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
        return departcity::class;
    }
}
