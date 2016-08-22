<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use Request;

use App\User;

class News extends Model
{
    protected $fillable = [
    	'UserId',
    	'Title',
    	'Tags',
    	'Link',
    	'Pic',
    	'Content'
    ];

    protected $primaryKey = 'NewsId';
    //
    public function user() {
    	return $this->belongsTo('App\User', 'UserId', 'id');
    }

    // File Upload
    // Return fileName
    public static function uploadImg($request, $field) {
    	if ($request->hasFile($field)) {
    		$pic = $request->file($field);
    		if ($pic->isValid()) {
    			$newname = $pic->hashName();
    			$pic->move('news', $newname);
    			return $newname;
    		}
    	}
    	return '';
    }

    
}
