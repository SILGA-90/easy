<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class itineraires
 * @package App\Models
 * @version June 6, 2021, 2:12 pm UTC
 *
 * @property \App\Models\Arrivalcity $arrivalcity
 * @property \App\Models\Bu $bus
 * @property \App\Models\Compagny $comp
 * @property \App\Models\Day $day
 * @property \App\Models\Departcity $departcity
 * @property \App\Models\Price $price
 * @property \App\Models\Time $time
 * @property \Illuminate\Database\Eloquent\Collection $reservations
 * @property \Illuminate\Database\Eloquent\Collection $bu1s
 * @property boolean $it_statut
 * @property integer $departcity_id
 * @property integer $arrivalcity_id
 * @property integer $day_id
 * @property integer $time_id
 * @property integer $bus_id
 * @property integer $price_id
 * @property integer $comp_id
 */
class itineraires extends Model
{
    use SoftDeletes;

    public $table = 'itineraires';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'it_statut',
        'departcity_id',
        'arrivalcity_id',
        'day_id',
        'time_id',
        'bus_id',
        'price_id',
        'comp_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'it_id' => 'integer',
        'it_statut' => 'boolean',
        'departcity_id' => 'integer',
        'arrivalcity_id' => 'integer',
        'day_id' => 'integer',
        'time_id' => 'integer',
        'bus_id' => 'integer',
        'price_id' => 'integer',
        'comp_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'it_statut' => 'required|boolean',
        'departcity_id' => 'required',
        'arrivalcity_id' => 'required',
        'day_id' => 'required',
        'time_id' => 'required',
        'bus_id' => 'required',
        'price_id' => 'required',
        'comp_id' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function arrivalcity()
    {
        return $this->belongsTo(\App\Models\Arrivalcity::class, 'arrivalcity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function bus()
    {
        return $this->belongsTo(\App\Models\Bus::class, 'bus_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function compagnies()
    {
        return $this->belongsTo(\App\Models\Compagnies::class, 'comp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function days()
    {
        return $this->belongsTo(\App\Models\Days::class, 'day_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function departcity()
    {
        return $this->belongsTo(\App\Models\Departcity::class, 'departcity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function prices()
    {
        return $this->belongsTo(\App\Models\Prices::class, 'price_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function times()
    {
        return $this->belongsTo(\App\Models\Times::class, 'time_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function reservations()
    {
        return $this->hasMany(\App\Models\Reservation::class, 'it_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function bu1s()
    {
        return $this->belongsToMany(\App\Models\Bus::class, 'tickets');
    }
    protected $primaryKey = 'it_id';
}
