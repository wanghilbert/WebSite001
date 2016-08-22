<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Http\Requests;
use App\Repositories\UserRepository;
use App\User;
use App\Model\News;
use App\Model\Resource as Resource;
use Illuminate\Support\Facades\Auth;
use Crypt;

class UserController extends Controller
{

    protected $redirectTo = '/home';
	protected $users;
    //
    //
    public function __construct(UserRepository $users)
    {
    	$this->users = $users;

        // $this->middleware('super', [
        //         'except' => [
        //             'registerUser'
        //         ]
        //     ]);
    }

    public function registerIndex() {
        return view('user.register');
    }
    /**
     * Create User Manually
     */
    public function registerUser(Request $request)
    {
        dd($request->all());
        $this->validate($request, [
                'UserName' => 'required|max:255|unique:users',
                'password' => 'required|min:6',
            ]);

        if ($request->password != $request->password_confirmation) {
            // TO_DO: Display Error Info.
            return redirect('/register');
        }
        $user = new User;
        $user->UserName = $request->UserName;
        $user->password = bcrypt($request->password);

        if ($request->exists('Permission')) {
            $user->Permission = $request->Permission;
        }

        if ($request->exists('Type')) {
            $user->Type = $request->Type;
        }
        
        $user->save();

        return redirect('/index')->withInput();
    }

    // Delete a user
    public function delete(Request $request, User $user)
    {
        $user->delete();

        return redirect('/user/show');
    }

    // Change the permission of user
    public function permission(Request $request, User $user)
    {
        if ($request->exists('Permission')) {
            $user->Permission = $request->Permission;
        }
        $user->save();

        return redirect('/user/show');
    }

    // Change the Password of User
    public function password(Request $request, User $user)
    {
        $this->validate($request, [
                'password' => 'required|min:6',
            ]);

        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/user/show');        
    }

    // Show users
    public function show()
    {
        return view('user.index', ['users' => $this->users->getAll()]);
    }

    // Get news list
    public function newsList(User $user)
    {
        $news = $user->news;
        dd($news);
        return view('user.news', ['news' => $news]);
    }

    public function select(Request $request)
    {
        $user = Auth::user();
        $res  = Resource::find([12, 34]);
        $option = true;
        if ($option) {
            $price = $res->HeadLinePrice;
        } else
        {
            $price = $res->NonHeadLinePrice;
        }
        $user->resselections()->attach($res, ['Option' => true, 'Price' => $price]);
    }

    public function done()
    {
        $user = Auth::user();
        $res = $user->resselections()->get();
        foreach ($res as $value) {
            $user->resselections()->detach($value->ResId);
        }     
    }

}
