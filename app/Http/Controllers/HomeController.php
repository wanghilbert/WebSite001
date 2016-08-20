<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Model\Tag as Tag;
use Illuminate\Support\Facades\Auth;

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

 /*       $arry1 = array("影视"=>"#影视", "综艺"=>"#综艺", "时尚"=>"#时尚", "美妆"=>"#美妆", "体育"=>"#体育", "科技"=>"#科技", "汽车"=>"#汽车");
        $arry2 = array("游戏"=>"#游戏", "美食"=>"#美食", "情感"=>"#情感", "健康"=>"#健康", "旅行"=>"#旅行", "教育"=>"#教育", "文化"=>"#文化");
        // $arry3 = array();
        */
        return view('index', ['items1' => $tags]);

    }

    public function testLogin(Request $request)
    {
        return view('auth.login');
    }
}
