<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Laravel2step extends Model  
{

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'laravel2step';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['userId', 'authCode', 'authCount', 'authStatus', 'authDate', 'requestDate', 'created_at', 'updated_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = ['authStatus' => 'boolean'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['authDate', 'requestDate', 'created_at', 'updated_at'];

}
