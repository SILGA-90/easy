<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class arrivalcity
 * @package App\Models
 * @version June 6, 2021, 2:15 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $itineraires
 * @property string $acity_name
 */
class arrivalcity extends Model
{
    use SoftDeletes;

    public $table = 'arrivalcity';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'acity_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'arrivalcity_id' => 'integer',
        'acity_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'acity_name' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function itineraires()
    {
        return $this->hasMany(\App\Models\Itineraire::class, 'arrivalcity_id');
    }
    protected $primaryKey = 'arrivalcity_id';
}
