<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bug_report extends Model
{
    //

     protected $fillable = [
        'bug_title', 'bug_report'

    ];

    public $timestamps = false;

    public function users(){
    	return $this->belongsTo('discrepancy\User');

    }
}
