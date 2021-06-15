<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class paiements
 * @package App\Models
 * @version May 18, 2021, 8:06 pm UTC
 *
 * @property \App\Models\Customer $cust
 * @property integer $somme
 * @property string $compte_debit
 * @property string $compte_credit
 * @property integer $cust_id
 */
class paiements extends Model
{
    use SoftDeletes;

    public $table = 'paiements';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'somme',
        'compte_debit',
        'compte_credit',
        'cust_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'somme' => 'integer',
        'compte_debit' => 'string',
        'compte_credit' => 'string',
        'cust_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'somme' => 'required|integer',
        'compte_debit' => 'required|string|max:255',
        'compte_credit' => 'required|string|max:255',
        'cust_id' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cust()
    {
        return $this->belongsTo(\App\Models\Customer::class, 'cust_id');
    }
}
