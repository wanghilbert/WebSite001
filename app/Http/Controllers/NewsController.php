<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use App\User as User;
use App\Model\News as News;

class NewsController extends Controller
{
    private $fieldTag = 'picture';

    public function __construct()
    {
        $this->middleware('auth');
    }
    //

    public function createNews(Request $request)
    {
        $user = Auth::user();
        if ($user) {
            $picpath = News::uploadImg($request, $this->fieldTag);
            $news = new News(['Title'  => $request->title,
                              'Tags'   => $request->tags,
                              'Link'   => $request->link,
                              'Pic'    => $picpath,
                              'Content'=> $request->content]);

            $user->news()->save($news);
            return view('news.create');
        } else {
            return redirect('/register');
        }
    }

    public function createIndex()
    {
        return view('news.create');
    }

    public function index($id) {
        $user = User::find($id);
        if ($user) {
            $news = $user->news()->get();
        }
    }
}
