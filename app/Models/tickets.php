<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
/**
 * Class tickets
 * @package App\Models
 * @version May 18, 2021, 8:05 pm UTC
 *
 * @property \App\Models\Bu $bus
 * @property \App\Models\Itineraire $it
 * @property string $tick_type
 * @property boolean $tick_statut
 * @property string $place_choisie
 * @property integer $bus_id
 * @property integer $it_id
 */
class tickets extends Model
{
    use SoftDeletes;

    public $table = 'tickets';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tick_type',
        'tick_statut',
        'place_choisie',
        'bus_id',
        'it_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tick_id' => 'integer',
        'tick_type' => 'string',
        'tick_statut' => 'boolean',
        'place_choisie' => 'string',
        'bus_id' => 'integer',
        'it_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tick_type' => 'required|string|max:255',
        'tick_statut' => 'required|boolean',
        'place_choisie' => 'required|string|max:255',
        'bus_id' => 'required',
        'it_id' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function bus()
    {
        return $this->belongsTo(\App\Models\Bu::class, 'bus_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function it()
    {
        return $this->belongsTo(\App\Models\Itineraire::class, 'it_id');
    }
    protected $primaryKey = 'tick_id';
}
