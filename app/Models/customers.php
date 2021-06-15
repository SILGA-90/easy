<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class customers
 * @package App\Models
 * @version May 18, 2021, 8:05 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $paiements
 * @property string $lastname
 * @property string $firstname
 * @property string $email
 * @property string $phone
 */
class customers extends Model
{
    use SoftDeletes;

    public $table = 'customers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'lastname',
        'firstname',
        'email',
        'phone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cust_id' => 'integer',
        'lastname' => 'string',
        'firstname' => 'string',
        'email' => 'string',
        'phone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'lastname' => 'required|string|max:255',
        'firstname' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function paiements()
    {
        return $this->hasMany(\App\Models\Paiement::class, 'cust_id');
    }
    protected $primaryKey = 'cust_id';
}
