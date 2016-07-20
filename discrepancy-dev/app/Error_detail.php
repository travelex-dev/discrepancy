<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Error_detail extends Model
{
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'error_id', 'customer_id', 'error_difference', 'error_currency', 'error_denom', 'error_quantity',
        'exchange_rate_id', 'discrepancy_cost (£)', 'state','root_cause', 'specific_cause',
    ];

    public function errors(){
    	return $this->belongsTo('discrepancy\Error');
}

}


            