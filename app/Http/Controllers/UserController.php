<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Http\Requests;
use App\Repositories\UserRepository;
use App\User;
use Crypt;

class UserController extends Controller
{
    protected $redirectTo = '/user/show';
	protected $users;
    //
    //
    public function __construct(UserRepository $users)
    {
    	$this->users = $users;

        $this->middleware('super', [
                'except' => [
                    'registerUser'
                ]
            ]);
        // $this->middleware('auth', [
        //     'except' => [
        //         'registerUser',
        //         'show'
        //     ]
        // ]);
    }

    /**
     * Create User Manually
     */
    public function registerUser(Request $request)
    {
        $this->validate($request, [
                'name' => 'required|max:255|unique:users',
                'password' => 'required|min:6',
            ]);
        
        $user = new User;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->permission = $request->permission;
        $user->save();

        return redirect('/home')->withInput();
    }

    public function show(Request $request)
    {
        return view('user.index', ['users' => $this->users->getAll()]);
    }


    public function delete(Request $request, User $user)
    {
        $user->delete();

        return redirect('/user/show');
    }

    public function permission(Request $request, User $user)
    {
        $user->permission = $request->PermType;
        $user->save();

        return redirect('/user/show');
    }

    public function password(Request $request, User $user)
    {
        $this->validate($request, [
                'password' => 'required|min:6',
            ]);

        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/user/show');        
    }
}
