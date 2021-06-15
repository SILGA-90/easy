<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class users
 * @package App\Models
 * @version June 1, 2021, 2:37 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $chauffeurs
 * @property string $lastname
 * @property string $firstname
 * @property string $email
 * @property string $role
 * @property string $img
 * @property string $mobile
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 */
class users extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'lastname',
        'firstname',
        'email',
        'role_id',
        // 'compagnie',
        'comp_id',
        'img',
        'mobile',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'lastname' => 'string',
        'firstname' => 'string',
        'email' => 'string',
        'role_id' => 'integer',
        // 'compagnie' => 'string',
        'comp_id' => 'integer',
        'img' => 'string',
        'mobile' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'lastname' => 'required|string|max:255',
        'firstname' => 'required|string|max:255',
        'email' => 'required|string|max:99',
        'role_id' => 'nullable|integer|max:255',
        // 'compagnie' => 'required|string|max:255',
        'comp_id' => 'nullable|integer|max:255',
        'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'mobile' => 'nullable|string|max:255',
        'email_verified_at' => 'nullable',
        // 'password' => 'required|string|max:255',
        'remember_token' => 'nullable|string|max:100',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function chauffeurs()
    {
        return $this->hasMany(\App\Models\Chauffeur::class, 'id');
    }
     public function role(){
        return $this->belongsTo('App/Models/roles'); // la relation pour les utilisateurs
    }
}
