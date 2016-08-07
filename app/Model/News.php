<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class News extends Model
{
	private $dst = 'news';
    protected $fillable = [
    	'UserId',
    	'Title',
    	'Tags',
    	'Link',
    	'Pic',
    	'Content'
    ];
    //
    public function user() {
    	return $this->belongsTo('App\User', 'UserId', 'UserId');
    }

    // File Upload
    // Return fileName
    public static function uploadImg(Request $request, $field) {
    	if ($request->hasFile($field)) {
    		$pic = $request->file($field);
    		if ($pic->isValid()) {
    			$newname = $pic->hashName();
    			$pic->move($dst, $filename);
    			return $newname;
    		}
    	}
    	return '';
    }

    
}
