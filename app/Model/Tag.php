<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\Resource;
use App\Model\Relation;

class Tag extends Model
{
	protected $fillable = [
		'Name'
	];

    protected $primaryKey = 'TagId';
    //
    public function resources() {
    	return $this->belongsToMany('App\Model\Resource', 'relations', 'TagId', 'ResId')->withTimestamps(); 
        // The second arg is the name of database, not the model.
    }

    public function getRes($id) {
    	$tag = $this->find($id)->get();
    	return $tag->resouces;
    }
}
