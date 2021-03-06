<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\History;
use App\Model\Attribute;
use App\Model\Article;
use App\Model\Tag;
use App\Model\Relation;

use Request;

class Resource extends Model
{
	private $dst = 'head'; 
	protected $fillable = [
		'Name',
    'WeChat',
		'FansNum',
    'Tags', 
    'Region',
    'HeadLinePrice',
    'NonHeadLinePrice',
    'AvgViews',
    'CostEffective',
    'Collects',
    'Purchases',
    'Comments',
    'Intro'
	];

    protected $primaryKey = 'ResId';
    
    // Relationship with History One To One
    public function history() {
    	return $this->hasOne('App\Model\History', 'ResId', 'ResId');
    }

    // Relationship with Statistic One To One
    public function attribute() {
    	return $this->hasOne('App\Model\Attribute', 'ResId', 'ResId');
    }

    // Relationship with Articles One To Many
    public function articles() {
    	return $this->hasMany('App\Model\Article', 'ResId', 'ResId');
    }

    // Relationship with Tags Many To Many
    public function tags() {
        return $this->belongsToMany('App\Model\Tag', 'relations', 'ResId', 'TagId')->withTimestamps();
    }

    // Relationship with User
    public function userappointment() {
        $this->belongsToMany('App\User', 'appointments', 'ResId', 'UserId')->withPivot('Date', 'Option')->withTimestamps();
    }

    public function userselections() {
        return $this->belongsToMany('App\User', 'selections', 'ResId', 'UserId')->withPivot('Option', 'Price')->withTimestamps();
    }

    public function usercomments() {
        return $this->belongsToMany('App\User', 'comments', 'ResId', 'UserId')->withPivot('Comment')->withTimestamps();
    }

    public function region() {
        return $this->belongsTo('App\Model\Region', 'Region', 'RegionId');
    }
    // File Upload
    // Return fileName
    public static function uploadImg($request, $field) {
    	if ($request->hasFile($field)) {
    		$pic = $request->file($field);
    		if ($pic->isValid()) {
    			$newname = $pic->hashName();
    			$pic->move('head', $newname);
    			return $newname;
    		}
    	}
    	return '';
    }

    public static function filterByArg($range, $key)
    {
        $price = explode($key, $range);
        if (count($price) == 2) {
            $low = $price[0];
            $high = $price[1];
        } else {
            $low = $price[0];
            $high = 0;
        }
        
        return [$low, $high];
    }

    public static function getAll() {
    	return self::all();
    }

   //  // Return collection
   //  // order: 0 => Inc, 1 => Desc
   //  public function sortItemsByKey($key, $order = 1, $limit = 10, $pageno = 1) {
   //  	if ($order == 0) {
   //  		return $this->all()
   //  					->sortBy($key)
   //  					->forPage($pageno, $limit);
   //  	} else {
   //  		return $this->all()
   //  				->orderByDesc($key)
   //  				->forPage($pageno, $limit);
   //  	}
   //  }

   //  // Filter
   //  // public function filterByTags($tags) {
   //  // 	return $this->where('Tags', 'likes', )
   //  // }

    public static function filterByFans($low = 0, $high = 0) {
    	if ($low == 0) {
    		return self::where('FansNum', '<', $high)
    					->orderBy('Name')
    					->get();
    	} else if ($high == 0) {
    		return self::where('FansNum', '>', $low)
    					->orderBy('Name')
    					->get();
    	} else {
	    	return self::whereBetween('FansNum', [$low, $high])
	    				->orderBy('Name')
	    				->get();  
        // return self::whereBetween('FansNum', [$low, $high])
        //       ->orderBy('Name')
        //       ->forPage(2, 10)
        //       ->get(); 		
	    }
    }
    
   //  public function filterByRegion($region) {
   //  	return $this->where('Region', $region)
   //  				->sort('Name')
   //  				->all();
   //  }

   //  // 0 => HeadLine Price
   //  // 1 => Nonheadline Price
   //  public function filterByPrice($type, $low = 0, $high = 0) {
   //  	if ($type == 0) {
			// if ($low == 0) {
	  //   		return $this->where('HeadLinePrice', '<', $high)
	  //   					->sort('Name')
	  //   					->all();
	  //   	} else if ($high == 0) {
	  //   		return $this->where('HeadLinePrice', '>', $low)
	  //   					->sort('Name')
	  //   					->all();
	  //   	} else {
		 //    	return $this->whereIn('HeadLinePrice', [$low, $high])
		 //    				->sort('Name')
		 //    				->all();    		
		 //    }
   //  	} else {
   //  		if ($low == 0) {
	  //   		return $this->where('NonHeadLinePrice', '<', $high)
	  //   					->sort('Name')
	  //   					->all();
	  //   	} else if ($high == 0) {
	  //   		return $this->where('NonHeadLinePrice', '>', $low)
	  //   					->sort('Name')
	  //   					->all();
	  //   	} else {
		 //    	return $this->whereIn('NonHeadLinePrice', [$low, $high])
		 //    				->sort('Name')
		 //    				->all();    		
		 //    }
   //  	}
   //  }

   //  public function filterByAuth($auth) {
   //  	return $this->where('AuthByWeChat', $auth)
   //  				->sort('Name')
   //  				->all();
   //  }

   //  public function filterByKey($key) {
   //  	// ??? How to express chars
   //  	return $this->where('WeChat', 'like', "%$key%")
   //  				->orwhere('Name', 'like', "%$key%")
   //  				->sort('Name')
   //  				->all();
   //  }

   //  // Article Operation
   //  public function getArticles($resId) {
   //  	return $this->find($resId)
   //  				->articles()
   //  				->sort('CreatedDate')
   //  				->all();
   //  }

   //  public function getTags($id) {
   //      $resource = $this->find($id)->get();
   //      return $resource->tags;
   //  }
}
