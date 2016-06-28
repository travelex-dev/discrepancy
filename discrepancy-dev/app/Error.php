<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'rap_order_id', 'rap_part_id', 'gcs_reference', 'sc_reference', 'created_by_user_id', 'status', 'errors_linked', 'date_raised',
    ];



}
