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
    	$this->middleware('auth');
    }

    public function show(Request $request)
    {
    	
    }

    public function edit(Request $request)
    {

    }

    public function delete(Request $request, Res $res)
    {

    }
}
