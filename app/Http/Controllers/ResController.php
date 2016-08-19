<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Model\Resource as Resource;
use App\Model\Tag as Tag;
use App\Model\Relation as Relation;

use Excel;

class ResController extends Controller
{

    public function createIndex()
    {
        return view('res.adminWechatRes');
    }

    public function createRes(Request $request)
    {
        $authByWeChat = false;
        if ($request->exists('AuthByWeChat')) {
            $authByWeChat = true;
        }
        $res = Resource::create([
                    'Name'      => $request->Name,
                    'Link'      => $request->Link,
                    'AuthByWeChat'  => $authByWeChat,
                    'FansNum'   => $request->FansNum,
                    'Desp'          => $request->Desp,
                    'Tags'          => $request->Tags,
                    'HeadLinePrice' => $request->HeadLinePrice,
                    'NonHeadLinePrice'  => $request->NonHeadLinePrice,
                    'Addtion'           => $request->Addition
                ]);
        return redirect('/res/create');
    }

    public function createTag(Request $request)
    {
        $tag = 'Tag02';
        Tag::create(['Name' => $tag]);
    }


    public function bind()
    {
        $res = Resource::find(1);
        $res->tags()->attach(2);
    }


    /**
     * Excel Operation
     */
    public function excelInput()
    {
        $path = 'storage/exports/';
        $items = Excel::load($path.'Test.xlsx', function($reader) {

        })->get();

        foreach ($items as $value) {
            $authByWeChat = false;
            if ($value->v) {
                $authByWeChat = true;
            }

            $res = Resource::where('Name', '=', $value->name)->first();
            if ($res == NULL) {
                $res = Resource::create([
                    'AuthByWeChat'  => $authByWeChat,
                    'Name'          => $value->name,
                    'Link'          => $value->link,
                    'FansNum'       => $value->fan,
                    'Desp'          => $value->desp,
                    'Tags'          => $value->tags,
                    'HeadLinePrice' => $value->headlineprice,
                    'NonHeadLinePrice'  => $value->nonheadlineprice,
                    'Addition'      => $value->addition
                ]);
            } else {
                continue;
            }
            $tagArr = explode("，", $value->tags);
            foreach ($tagArr as $tag) {
                // $count = Tag::where('Name', '=', $tag)->count();
                $tagItem = Tag::where('Name', '=', $tag)->first();
                if ($tagItem == NULL) {
                    $tagItem = Tag::create([
                        'Name' => $tag
                        ]);
                }
                $res->tags()->attach($tagItem);
            }
        }
    } 
    
    // Test Filter
    public function filterByFans()
    {
        $res = Resource::filterByFans(2,100);
        dd($res);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        dd($request->all());
    }

}
