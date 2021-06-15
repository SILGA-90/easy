<?php

namespace App\Repositories;

use App\Models\days;
use App\Repositories\BaseRepository;

/**
 * Class daysRepository
 * @package App\Repositories
 * @version June 6, 2021, 2:13 pm UTC
*/

class daysRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jour'
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
        return days::class;
    }
}
