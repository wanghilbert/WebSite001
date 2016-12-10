<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Model\Tag as Tag;
use Illuminate\Support\Facades\Auth;

use App\Model\Resource as Resource;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('index');
    // }

    public function index()
    {
        $tags=Tag::all();
        return view('index', ['tags' => $tags]);

    }

    public function aboutus()
    {
        return view('aboutUs');
    }

    public function stars()
    {
        return view('stars');
    }

    public function detailHot($ResId)
    {
        $res = Resource::find($ResId);
        $tags = $res->tags()->get();

        return view('detailHot', ['res' => $res, 'tags' => $tags]);
    }

/*    public function classify()
    {
        return view('contents.classify');
    }
*/
    public function testLogin(Request $request)
    {
        return view('auth.login');
    }

    public function test()
    {
        return view('stars');
    }

}
