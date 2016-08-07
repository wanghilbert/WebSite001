<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Model\Resource;
use App\Model\Relation;

class Tag extends Model
{
    //
    public function resources() {
    	return $this->belongsToMany('App\Model\Resource', 'App\Model\Relation', 'TagId', 'ResId')->withTimestamps();
    }

    public function getRes($id) {
    	$tag = $this->find($id)->get();
    	return $tag->resouces;
    }
}
