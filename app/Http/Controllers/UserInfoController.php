<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Http\Requests;
use App\Repositories\UserRepository;
use App\User;
use Crypt;

class UserInfoController extends Controller
{
	protected $users;
    //
    //
    public function __construct(UserRepository $users)
    {
    	$this->users = $users;

        $this->middleware('auth', [
            'except' => [
                'registerUser',
            ]
        ]);
    }
    
    public function show(Request $request)
    {
    	return view('user.userInfo', ['users' => $this->users->getAll()]);
    }

    /**
     * Create User Manually
     */
    public function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255|unique:users',
        ]);

        if ($validator->fails()) {
            # code...
            return redirect('/home')->withErrors($validator)->withInput();
        }
        // return view('user.userInfo', ['users' => $this->users->getAll()]);
        $user = new User;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->permission = $request->permission;
        $user->save();

        return redirect('/home')->withInput();
    }
}
