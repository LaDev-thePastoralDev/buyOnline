<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{


    public function __construct()
    {
//        $this->middleware('auth');
//        $this->middleware('role:ROLE_ADMIN');
//        $this->middleware('role:ROLE_MANAGER');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $users=User::all()->sortByDesc('id');
        $users=User::orderBy('id','desc')->paginate('10');
        return view('admin.users.usersIndex',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name'=>'required|max:255',
                'email'=>'required|email',
                'password'=>'required'
            ]);

        $user=new User();

        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);



        if($request->password!=$request->confirmPassword)
        {
            abort(403,'Error while creating new user. Passwords does not match');
        }

        $user->save();



            return redirect('admin/users')->with("User successfully Created");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::where('id',$id)->with('roles')->first();
        return view('admin.users.show')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('admin.users.editUsers',compact('user'));
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
        $user=User::findOrFail($id);

        $this->validate($request,[
            'name'=>'required|max:255',
            'email'=>'required|email'
        ]);

        $user->name=$request->name;
        $user->email=$request->email;

        $user->save();

        return redirect('admin/users');
    }

    public function block($id)
    {
        //
    }

    public function usersProfile()
    {
//        $users = User::findOrFail($id);

        return view('usersProfile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);

        $user->delete();

        return redirect('/admin/users');
    }
}
