<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class chauffeurs
 * @package App\Models
 * @version May 22, 2021, 2:40 am UTC
 *
 * @property \App\Models\User $id
 * @property \Illuminate\Database\Eloquent\Collection $bus
 * @property \Illuminate\Database\Eloquent\Collection $itineraires
 * @property string $firstname
 * @property string $lastname
 * @property integer $old
 * @property string $gender
 * @property string $email
 * @property string $phone
 * @property string $nationality
 * @property string $no_CNIB
 * @property boolean $statut
 * @property string $image
 * @property integer $id
 */
class chauffeurs extends Model
{
    use SoftDeletes;

    public $table = 'chauffeurs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
        'comp_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'chauf_id' => 'integer',
        'firstname' => 'string',
        'lastname' => 'string',
        'old' => 'integer',
        'gender' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'nationality' => 'string',
        'no_CNIB' => 'string',
        'statut' => 'boolean',
        'image' => 'string',
        'comp_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'old' => 'required|integer',
        'gender' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'nationality' => 'required|string|max:255',
        'no_CNIB' => 'required|string|max:255',
        'statut' => 'required|boolean',
        'comp_id' => 'required|integer|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function id()
    {
        return $this->belongsTo(\App\Models\User::class, 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function bus()
    {
        return $this->hasMany(\App\Models\Bu::class, 'chauf_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function itineraires()
    {
        return $this->hasMany(\App\Models\Itineraire::class, 'chauf_id');
    }
    protected $primaryKey = 'chauf_id';
}
