<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User as User;
use App\Resource as Res;

class ResController extends Controller
{
    //
    protected $redirectTo = '/res/show';

    public function __construct()
    {
    	// $this->middleware(['auth','res']);
    }

    public function index()
    {
        return redirect('/res/show');
    }

    public function editIndex()
    {
        return view('res.edit');
    }

    public function show(Request $request)
    {
        if ($request->user()->permission == "Super") {
            # code...
            $resources = Res::all();
        }
        else
        {
            $resources = Res::where('user_id', $request->user()->id)->get();
        }
    	
        // dd($resources);
        return view('res.index', ['resources' => $resources]);
    }

    public function add(Request $request)
    {
        $this->validate($request, [
                'title' => 'required'
            ]);

        $res = $request->user()->resources()->create(['title' => $request->title]);
        $res->address = $request->address;
        $res->content = $request->content;

        $res->save();

        return redirect('/res/show');
    }

    public function editPage(Request $request, Res $res)
    {
        return view('res.edit1', ['res' => $res]);
    }

    public function update(Request $request, Res $res)
    {
        if (($request->user()->permission == "Super") || ($request->user()->id == $res->user_id)) {
            # code...
            $this->validate($request,[
                    'title' => 'required',
                ]);

            $res->title = $request->title;
            $res->address = $request->address;
            $res->content = $request->content;

            $res->save();
        }
        return redirect('/res/show');
    }

    public function delete(Request $request, Res $res)
    {
        if (($request->user()->permission == "Super") || ($request->user()->id == $res->user_id)) 
        {
            $res->delete();
        }
        
        return redirect('/res/show');
    }

    public function test(Request $request)
    {
        $arry1 = array("影视"=>"#影视", "综艺"=>"#综艺", "时尚"=>"#时尚", "美妆"=>"#美妆", "体育"=>"#体育", "科技"=>"#科技", "汽车"=>"#汽车");
        $arry2 = array("游戏"=>"#游戏", "美食"=>"#美食", "情感"=>"#情感", "健康"=>"#健康", "旅行"=>"#旅行", "教育"=>"#教育", "文化"=>"#文化");
        // $arry3 = array();
        return view('index', ['items1' => $arry1,
                              'items2' => $arry2]);
    }
}
