<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class reservations
 * @package App\Models
 * @version May 18, 2021, 8:05 pm UTC
 *
 * @property \App\Models\Itineraire $it
 * @property string $lastname
 * @property string $firstname
 * @property string $email
 * @property string $phone
 * @property boolean $reserv_statut
 * @property string $date
 * @property integer $it_id
 */
class reservations extends Model
{
    use SoftDeletes;

    public $table = 'reservations';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'lastname',
        'firstname',
        'email',
        'phone',
        'reserv_statut',
        'date',
        'it_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'reserv_id' => 'integer',
        'lastname' => 'string',
        'firstname' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'reserv_statut' => 'boolean',
        'date' => 'date',
        'it_id' => 'integer'
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
        'reserv_statut' => 'required|boolean',
        'date' => 'required',
        'it_id' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function it()
    {
        return $this->belongsTo(\App\Models\Itineraire::class, 'it_id');
    }
    protected $primaryKey = 'reserv_id';
}
