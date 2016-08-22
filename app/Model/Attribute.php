<?php

namespace App\Model;

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

	protected $primaryKey = 'ID';
    //
    public function resource () {
    	return $this->belongsTo('App\Model\Resource', 'ResId', 'ResId');
    }

    
}
