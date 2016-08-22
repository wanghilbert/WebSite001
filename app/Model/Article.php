<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Model\Resource;
use App\Model\History;

class Article extends Model
{
	protected $fillable = [
		'ResId',
		'Title',
		'Link',
		'CreatedDate',
		'ViewsNum',
		'UpNum'
	];
    protected $primaryKey = 'ID';
    //
    public function resource() {
    	return $this->belongsTo('App\Model\Resource', 'ResId', 'ResId');
    }
    // ??? Test if the operation on database is right.
    public function view($id) {
    	$article = $this->find($id);
    	$article->ViewsNum += 1;
    	$article->save();

    	$resource = $article->resource;
    	$date = date('Y/m/d');

    	$history = $resource->history()->where('Date', $date)->get();
    	$history->incView($date);

    	$resource->AvgViewNum = $history->getAvgViewNum();
    	$resource->save();
    }

    public function like($id) {
    	$article = $this->find($id);
    	$article->UpNum += 1;
    	$article->save();

    	$resource = $article->resource;
    	$date = date('Y/m/d');

    	$history = $resource->history()->where('Date', $date)->get();
    	$history->incUp($date);
    }
}
