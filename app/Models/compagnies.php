<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class compagnies
 * @package App\Models
 * @version May 20, 2021, 12:20 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $chauffeurs
 * @property \Illuminate\Database\Eloquent\Collection $itineraires
 * @property string $comp_name
 * @property string $comp_code
 * @property string $image
 * @property boolean $comp_statut
 */
class compagnies extends Model
{
    use SoftDeletes;

    public $table = 'compagnies';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'comp_name',
        'comp_code',
        'image',
        'comp_statut'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'comp_id' => 'integer',
        'comp_name' => 'string',
        'comp_code' => 'string',
        'image' => 'string',
        'comp_statut' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'comp_name' => 'required|string|max:255',
        'comp_code' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'comp_statut' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function chauffeurs()
    {
        return $this->hasMany(\App\Models\Chauffeur::class, 'comp_id');
    }

    public function bus()
    {
        return $this->hasMany(\App\Models\Bus::class, 'comp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function itineraires()
    {
        return $this->hasMany(\App\Models\Itineraire::class, 'comp_id');
    }
    protected $primaryKey = 'comp_id';
}
