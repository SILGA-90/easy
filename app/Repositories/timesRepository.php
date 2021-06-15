<?php

namespace App\Repositories;

use App\Models\times;
use App\Repositories\BaseRepository;

/**
 * Class timesRepository
 * @package App\Repositories
 * @version June 6, 2021, 2:13 pm UTC
*/

class timesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'departtime',
        'arrivaltime_id'
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
        return times::class;
    }
}
