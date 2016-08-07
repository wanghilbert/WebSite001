<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
	protected $fillable [
		'ResId', 
		'ViewsNum', 
		'UpNum', 
		'Date'
	];
    // Relationship with Resources
    public function resource() {
    	return $this->belongsTo('App\Model\Resource', 'ResId', 'ResId');
    }

    public function getViewByDate($date)
    {
    	$history = $this->where('Date', $date)->get();
    	return $history->ViewsNum;
    }

    public function getUpByDate($date)
    {
    	$history = $this->where('Date', $date)->get();
    	return $history->UpNum;
    }

    public function getAvgViewNum() 
    {
    	$sum = $this->all()->sum('ViewsNum');
    	$count = $this->all()->count();
    	return $sum/$count;
    }

    public function incView($date)
    {
    	$history = $this->where('Date', $date)->get();
    	$history->ViewsNum += 1;
    	$history->save();
    }

    public function incUp($date)
    {
    	$history = $this->where('Date', $date)->get();
    	$history->UpNum += 1;
    	$history->save();
    }

    public function decUp($date)
    {
    	$history = $this->where('Date', $date)->get();
    	if ($history->UpNum > 0) {
    		$history->UpNum -= 1;
    	}
    	$history->save();
    }
}
