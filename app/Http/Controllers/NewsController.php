<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User as User;
use App\Model\News as News;

class NewsController extends Controller
{
    private const $fieldTag = '';

    public function __construct()
    {
        $this->middleware('auth');
    }
    //
/*    public function testStoreFile(Request $request)
    {
    	$dst = "./news";
    	$test = $request->input("submit");
    	// dd($test);
    	dd($request->fileData->getFilename());
    	if ($request->hasFile('fileData')) {
    		if ($request->file('fileData')->isValid()) {
    			$fileName = $request->file('fileData')->hashName();
    			$request->file('fileData')->move($dst, $fileName);
    		} else {
    			printf("File Invalid\n");
    		}
    	} else {
    		printf("File not Found\n");
    	}
    }

    public function storeFile(Request $request, $filename, $dst)
    {
    	if ($request->hasFile($filename)) {
    		if ($request->file($filename)->isValid()) {
    			$filename = $request->file($filename)->hashName();
    			$request->file($filename)->move($dst, $filename);
    		} else {
    			printf("File Invalid.\n");
    		}
    	} else {
    		printf("File Not Found.\n");
    	}
    }*/

    public function createNews(Request $request)
    {
        $picpath = News::uploadImg($request, $fieldTag);

    	$user = Auth::user();

        $news = new News(['Title'  => $request->title,
                          'Tags'   => $request->tags,
                          'Link'   => $request->link,
                          'Pic'    => $picpath,
                          'Content'=> $request->content]);

    	$user->news()->save($news);    	
    }

    public function updateNews(Request $request, $news)
    {

    }

    public function getNews()
    {

    }
}
