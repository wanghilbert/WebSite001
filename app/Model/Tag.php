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

    public static function filterByTag($id) {
    	$tag = self::find($id);
    	return $tag->resources()->get();
    }

    public static function exist($name)
    {
        $count = self::where('Name', '=', $name)->count();
        if($count > 0)
        {
            return true;
        } else {
            return false;
        }
    }
}
