<?php

namespace App\Repositories;

use App\Models\prices;
use App\Repositories\BaseRepository;

/**
 * Class pricesRepository
 * @package App\Repositories
 * @version June 6, 2021, 2:14 pm UTC
*/

class pricesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'price'
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
        return prices::class;
    }
}
