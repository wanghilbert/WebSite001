<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Resource;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function resources()
    {
        return $this->hasMany('App\Resource');
    }
}
