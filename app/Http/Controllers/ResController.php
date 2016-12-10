<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Model\Resource as Resource;
use App\Model\Tag as Tag;
use App\Model\Relation as Relation;
use App\Model\Region as Region;
use App\User as User;
use Illuminate\Support\Facades\Auth;

use Excel;

class ResController extends Controller
{
    protected $excelPath = '';

    // private const $MAX = 9999999999;
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
                        dd($res);
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
                            $res->Tags = $res->Tags . ',' . $tagItem->Name;
                            $res->save();
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
                            $res->Tags = $res->Tags . ',' . $tagItem->Name;
                            $res->save();
                        }
                    }
                }
            }
        }

        ini_set('max_execution_time', 30);
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
        return redirect("/detailHot-$id");
    }

    /**
     * Add a Res into the shop cart
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function putInCart($id, $option)
    {
        // $user = Auth::user();
        $user = Auth::user();

        $itemsInCart = $user->resselections()->get();
        
        foreach ($itemsInCart as $value) {
            if ($value->pivot->ResId == $id) {
                return redirect("/detailHot-$id");
                // dd("已存在");
            }
        }

        $res = Resource::find($id);  
 
        if ($option == 1) {
            $price = $res->HeadLinePrice;
            $myOption = True;
        } else {
            $price = $res->NonHeadLinePrice;
            $myOption = False;
        }
        $res->Purchases += 1;

        $user->resselections()->attach($res, ['Option' => $myOption, 'Price' => $price]);
        return redirect("/detailHot-$id");
    }

    /**
     * List the Res in the shop cart
     * @return [type] [description]
     */
    public function listItemInCart()
    {
        // $user = User::find(1);
        $user = Auth::user();

        $res = $user->resselections()->get();
        $count = $res->count();
        $sum = 0;
        foreach ($res as $value) {
            $sum += $value->pivot->Price;
        }
        return view('shopCart', ['items' => $res, 'count' => $count, 'sumprice' => $sum]);
    }

    public function deleteItemFromCart($id)
    {
        // $user = Auth::user();
        $user = Auth::user();
        $resInUser = $user->resselections();
        if ($resInUser->find($id) != NULL) {
            $res = Resource::find($id);
            $user->resselections()->detach($res);
        } else {
            dd('This Res is Not in Shop List!');
        }
        return redirect('/shop/list');
    }

    public function appoint($id, $option)
    {
        $user = Auth::user();

        $itemsInCart = $user->resappointment()->get();
        
        foreach ($itemsInCart as $value) {
            if ($value->pivot->ResId == $id) {
                return redirect("/detailHot-$id");
                // dd("已存在");
            }
        }

        $res = Resource::find($id);
        if ($option == 1) {
            $price = $res->HeadLinePrice;
            $myOption = True;
        } else {
            $price = $res->NonHeadLinePrice;
            $myOption = False;
        }
        $user->resappointment()->attach($res, ['Date' => '2016-11-11']);
        return redirect("/detailHot-$id");
    }

    /**
     * List the Res in the shop cart
     * @return [type] [description]
     */
    public function listItemAppoint()
    {
        $user = Auth::user();

        $res = $user->resappointment()->get();
        $count = $res->count();
        $sum = 0;
        return view('appointment', ['items' => $res, 'count' => $count, 'sumprice' => $sum]);
    }

    public function deleteItemFromAppoint($id)
    {
        $user = Auth::user();

        $resInUser = $user->resappointment();
        if ($resInUser->find($id) != NULL) {
            $res = Resource::find($id);
            $user->resappointment()->detach($res);
        } else {
            dd('This Res is Not in Shop List!');
        }
        return redirect('/appointment/list');
    }
    // Test Filter
    // 
    // 
    

    public function listIndex(Request $req)
    {
        
        $avg_topreadnum = $req->avg_topreadnum;
        $weixin_fans    = $req->weixin_fans;
        $key            = $req->k;
        $tags           = $req->weixin_tags;

        // $res = Resource::whereHas('tags', function($query){
        //     $query->whereIn('TagId', [1,2]);
        // })
        // ->get();
        // $res = Resource::has('tags', '>=', 2)->paginate(30);
        $res = Resource::whereHas('tags', function($query) use ($tags){
            if ($tags != null) {
                $query->where('tags.TagId', '=', $tags);
            }
        })
        ->when($avg_topreadnum, function($query) use ($avg_topreadnum){
            $readNum = Resource::filterByArg($avg_topreadnum, "-");
            if ($readNum[1] != "MAX") {
                $query->where([
                    ["AvgViews", ">=", $readNum[0]],
                    ["AvgViews", "<", $readNum[1]]
                    ]
                    );
            } else {
                $query->where([
                    ["AvgViews", ">=", $readNum[0]]
                    ]
                    );                
            }
            
        })
        ->when($weixin_fans, function($query) use ($weixin_fans){
            $fansNum = Resource::filterByArg($weixin_fans, "-");
            if($fansNum[1] != "MAX")
            {
                $query->where([
                    ["FansNum", ">=", $fansNum[0]],
                    ["FansNum", "<", $fansNum[1]]
                    ]);                
            } else {
                $query->where([
                    ["FansNum", ">=", $fansNum[0]]
                    ]);
            }
        })
        ->when($key, function($query) use ($key) {
            $query->where(
                "Name", "like", "%$key%"
                );
        })
        ->paginate(30);

        $tags=Tag::all();
        
        return view('listSelect', ['items' => $res, 'tags' => $tags]);
    }

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
        
        return [$low, $high];
        // $res = Resource::filterByFans($low,$high);
        // dd($res);
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
