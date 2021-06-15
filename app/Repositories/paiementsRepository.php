<?php

namespace App\Repositories;

use App\Models\paiements;
use App\Repositories\BaseRepository;

/**
 * Class paiementsRepository
 * @package App\Repositories
 * @version May 18, 2021, 8:06 pm UTC
*/

class paiementsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'somme',
        'compte_debit',
        'compte_credit',
        'cust_id'
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
        return paiements::class;
    }
}
