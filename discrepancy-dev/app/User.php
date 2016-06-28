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
<<<<<<< Updated upstream
        'first_name', 'last_name', 'username', 'email', 'password'
=======
        'first_name', 'last_name', 'username', 'email', 'password',
>>>>>>> Stashed changes
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', //'remember_token',
    ];
}
