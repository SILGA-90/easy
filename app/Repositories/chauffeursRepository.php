<?php

namespace App\Repositories;

use App\Models\chauffeurs;
use App\Repositories\BaseRepository;

/**
 * Class chauffeursRepository
 * @package App\Repositories
 * @version May 22, 2021, 2:40 am UTC
*/

class chauffeursRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'firstname',
        'lastname',
        'old',
        'gender',
        'email',
        'phone',
        'nationality',
        'no_CNIB',
        'statut',
        'image',
        'id'
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
        return chauffeurs::class;
    }
}
