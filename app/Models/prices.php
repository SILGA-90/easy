<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class prices
 * @package App\Models
 * @version June 6, 2021, 2:14 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $itineraires
 * @property integer $price
 */
class prices extends Model
{
    use SoftDeletes;

    public $table = 'prices';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'price_id' => 'integer',
        'price' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'price' => 'required|integer',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function itineraires()
    {
        return $this->hasMany(\App\Models\Itineraire::class, 'price_id');
    }
    protected $primaryKey = 'price_id';
}
