<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Model\Resource;

class Attribute extends Model
{
	protected $fillable = [
		'ResId',
		'Introduction',
		'Addition',
		'CollectedNum',
		'SumViewNum',
		'SumUpNum',
		'PurchaseNum',
		'CommentsNum'
	];

    //
    public function resource () {
    	return $this->belongsTo('App\Model\Resource', 'ResId', 'ResId');
    }

    
}
