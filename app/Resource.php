<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
	protected $fillable = ['title'];
    //
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
