<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class bus
 * @package App\Models
 * @version May 18, 2021, 8:04 pm UTC
 *
 * @property \App\Models\Chauffeur $chauf
 * @property \Illuminate\Database\Eloquent\Collection $itineraires
 * @property \Illuminate\Database\Eloquent\Collection $itineraire1s
 * @property string $bus_marque
 * @property string $bus_number
 * @property string $bus_type
 * @property string $total_place
 * @property string $place_dispo
 * @property string $image
 * @property boolean $bus_statut
 * @property integer $chauf_id
 */
class bus extends Model
{
    use SoftDeletes;

    public $table = 'bus';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'bus_marque',
        'bus_number',
        'bus_type',
        'total_place',
        // 'place_dispo',
        'image',
        'bus_statut',
        'chauf_id',
        'comp_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'bus_id' => 'integer',
        'bus_marque' => 'string',
        'bus_number' => 'string',
        'bus_type' => 'string',
        'total_place' => 'string',
        // 'place_dispo' => 'string',
        'image' => 'string',
        'bus_statut' => 'boolean',
        'chauf_id' => 'integer',
        'comp_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'bus_marque' => 'required|string|max:255',
        'bus_number' => 'required|string|max:255',
        'bus_type' => 'required|string|max:255',
        'total_place' => 'required|string|max:255',
        // 'place_dispo' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'bus_statut' => 'required|boolean',
        'chauf_id' => 'required',
        'comp_id' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function chauffeurs()
    {
        return $this->belongsTo(\App\Models\chauffeurs::class, 'chauf_id');
    }
    
    public function compagnies()
    {
        return $this->belongsTo(\App\Models\compagnies::class, 'comp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function itineraires()
    {
        return $this->hasMany(\App\Models\Itineraire::class, 'bus_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function itineraire1s()
    {
        return $this->belongsToMany(\App\Models\Itineraire::class, 'tickets');
    }
    protected $primaryKey = 'bus_id';
}
