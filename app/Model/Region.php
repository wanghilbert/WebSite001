<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    protected $fillable = ['Region'];
    protected $primaryKey = 'RegionId';

    public function resources()
    {
    	return $this->hasMany('App\Model\Resource', 'Region', 'RegionId');
    }
}
