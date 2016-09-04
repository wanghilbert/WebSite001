<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Model\Resource as Resource;
use App\Model\Tag as Tag;
use App\Model\Relation as Relation;
use App\Model\Region as Region;

use Excel;

class ResController extends Controller
{
    protected $excelPath = '';

    /**
     * Test Function, Delete Later
     * @return [type] [description]
     */
    public function createIndex()
    {
        $tags = Tag::all();
        $tag = '文案创作';
        if (Tag::exist($tag)) {
            dd('OK');
        }
        dd($tags);
        return view('res.adminWechatRes');
    }

    /**
     * Create Resource manually
     * @param  Request $request [description]
     * @return redirect to create index
     */
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

    /**
     * Create Tags manually
     * @param  Request $request [description]
     * @return 
     */
    public function createTag(Request $request)
    {
        $tags = $request->tags;
        $tagArr = explode("，", $tags);

        foreach ($tagArr as $value) {
            if (!Tag::exist($value)) {
                Tag::create(['Name' => $tag]);
            }
        }
    }


    public function bind()
    {
        $res = Resource::find(1);
        $res->tags()->attach(2);
    }


    /**
     * Excel Operation
     * Set Excel Path
     */
    public function excelInput()
    {
        ini_set('max_execution_time', 300);
        $path = 'storage/exports/';
        // $excelname = 'Test.xlsx';
        $items = Excel::load($path.'Test.xls', function($reader) {

        })->get();

        foreach ($items as $value) {
            $title = $value->getTitle(); // Tag

            $tagItem = Tag::where('Name', '=', $title)->first();
            if ($tagItem == NULL) {
                $tagItem = Tag::create([
                    'Name' => $title
                    ]);
            }

            foreach ($value as $row) {
                if ($row->wechat == NULL) {
                    continue;
                }

                if ($title == '地域') {
                    $region = Region::where('Region', '=', $row->region)->first();
                    if ($region == NULL) {
                        $region = Region::create([
                                'Region'    =>  $row->region
                            ]);
                    }

                    $res = Resource::where('WeChat', '=', $row->wechat)->first();
                    if ($res == NULL) {
                        $costeffective = 8.22;
                        $collects = 0;
                        $purchases = 0;
                        $comments = 0;
                        $intro = NULL;
                        if ($row->costeffective != NULL) {
                            $costeffective = $row->costeffective;
                        }

                        if ($row->collects != NULL) {
                            $collects = $row->collects;
                        }

                        if ($row->purchases != NULL) {
                            $purchases = $row->purchases;
                        }

                        if ($row->comments != NULL) {
                            $comments = $row->comments;
                        }

                        if ($row->intro != NULL) {
                            $intro = $row->$intro;
                        }

                        $res = new Resource([
                            'Name'          => $row->name,
                            'WeChat'        => $row->wechat,
                            'FansNum'       => $row->fans,
                            'Tags'          => $title,
                            'HeadLinePrice' => $row->headline,
                            'NonHeadLinePrice'  => $row->nonheadline,
                            'AvgViews'      => $row->avgviews,
                            'CostEffective' => $costeffective,
                            'Collects'      => $collects,
                            'Purchases'     => $purchases,
                            'Comments'      => $comments,
                            'Intro'         => $intro
                        ]);
                        $region->resources()->save($res);
                        $res->tags()->attach($tagItem);
                    } else {
                        $tags = $res->tags()->get();
                        $flag = false;
                        foreach ($tags as $value) {
                            if ($value->Name == $title) {
                                $flag = true;
                                break;
                            }
                        }

                        if ($flag == false) {
                            $res->tags()->attach($tagItem);
                        }
                    }
                } else {
                    $res = Resource::where('WeChat', '=', $row->wechat)->first();
                    if ($res == NULL) {
                        $costeffective = 8.22;
                        $collects = 0;
                        $purchases = 0;
                        $comments = 0;
                        $intro = NULL;
                        if ($row->costeffective != NULL) {
                            $costeffective = $row->costeffective;
                        }

                        if ($row->collects != NULL) {
                            $collects = $row->collects;
                        }

                        if ($row->purchases != NULL) {
                            $purchases = $row->purchases;
                        }

                        if ($row->comments != NULL) {
                            $comments = $row->comments;
                        }

                        if ($row->intro != NULL) {
                            $intro = $row->$intro;
                        }

                        $res = Resource::create([
                            'Name'          => $row->name,
                            'WeChat'        => $row->wechat,
                            'FansNum'       => $row->fans,
                            'Tags'          => $title,
                            'HeadLinePrice' => $row->headline,
                            'NonHeadLinePrice'  => $row->nonheadline,
                            'AvgViews'      => $row->avgviews,
                            'CostEffective' => $costeffective,
                            'Collects'      => $collects,
                            'Purchases'     => $purchases,
                            'Comments'      => $comments,
                            'Intro'         => $intro
                        ]);
                        $res->tags()->attach($tagItem);
                    } else {
                        $tags = $res->tags()->get();
                        $flag = false;
                        foreach ($tags as $value) {
                            if ($value->Name == $title) {
                                $flag = true;
                                break;
                            }
                        }

                        if ($flag == false) {
                            $res->tags()->attach($tagItem);
                        }
                    }
                }
            }
        }

        ini_set('max_execution_time', 30);

/*        foreach ($items as $value) {
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
        }*/
    } 
    
    /**
     * [collect description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function collect($id)
    {
        $res = Resource::find($id);
        $res->Collects += 1;
        $res->save();
        return redirect('/detailHot');
    }

    // Test Filter
    /**
     * Filter Res by Fan
     * @param $range => "100-200" 
     * @return [type] [description]
     */
    public function filterByFans($range)
    {
        $price = explode("-", $range);
        if (count($price) == 2) {
            $low = $price[0];
            $high = $price[1];
        } else {
            $low = $price[0];
            $high = 0;
        }
        
        $res = Resource::filterByFans($low,$high);
        dd($res);
    }

    /**
     * Filter Res by Tags, Or relations
     * @param  $tags => id of Tag (1%2%3)
     * @return [type]       [description]
     */
    public function filterByOrTags($tags)
    {
        $tagArr = explode("%", $tags);        
        $resId = Relation::whereIn('TagId', $tagArr)->get()->unique('ResId');
        $resIdArr = null;
        $count = 0;
        foreach ($resId as $value) {
            $resIdArr[$count] = $value->ResId;
            $count++;
        }
        $res = Resource::whereIn('ResId', $resIdArr)->get();
        dd($res);
    }

    /**
     * Filter Res by Tags, And relation
     * @param  $tags => id of Tag (1%2%3)
     * @return [type] [description]
     */
    public function filterByAndTags($tags)
    {
        $tagArr = explode("%", $tags);
        $res = null;
        foreach ($tagArr as $value) {
            if ($res == null) {
                $res = Tag::find($value)->resources;
            } else {
                $res = $res->intersect(Tag::find($value)->resources);
            }
        }
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
