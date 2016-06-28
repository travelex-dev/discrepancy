<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'feedback_subject', 'feedback_report'
    ];

    public $timestamps = false;

    public function users(){
    	return $this->belongsTo('discrepancy\User');

    }
}
