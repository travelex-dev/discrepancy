<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $fillable = [
        'first_name', 'last_name', 'username','email','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function feedback_reports(){
        return $this->hasMany('App\Feedback_report');
    }

    public function bug_reports(){
        return $this->hasMany('App\Bug_report');
    }

    public function errors(){
        return $this->hasMany('App\Error');
    }
}
