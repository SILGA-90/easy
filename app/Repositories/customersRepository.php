<?php

namespace App\Repositories;

use App\Models\customers;
use App\Repositories\BaseRepository;

/**
 * Class customersRepository
 * @package App\Repositories
 * @version May 18, 2021, 8:05 pm UTC
*/

class customersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'lastname',
        'firstname',
        'email',
        'phone'
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
        return customers::class;
    }
}
