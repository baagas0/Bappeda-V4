<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class CounterValues extends Model  
{

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'counter_values';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['day_id', 'day_value', 'yesterday_id', 'yesterday_value', 'week_id', 'week_value', 'month_id', 'month_value', 'year_id', 'year_value', 'all_value', 'record_date', 'record_value'];

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
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['record_date'];

}
