<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class rolesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_ADMIN');
        $this->middleware('role:ROLE_MANAGER');
        $this->middleware('role:ROLE_VISITOR');
        $this->middleware('role:ROLE_Staff');
        $this->middleware('role:ROLE_USER');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Role::all();
//        return view('admin.roles.rolesIndex')->withRoles($roles);
        return view('admin.roles.rolesIndex',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.createRoles');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:255',
            'description'=>'required|max:255'
        ]);

        $role=new Role();

        $role->name=$request->name;
        $role->description=$request->description;

        $role->save();

        return redirect('/manage/roles');
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
        $role=Role::findOrFail($id);
        return view('admin.roles.editRoles',compact('role'));
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
        $role=Role::findOrFail($id);

        $this->validate($request,[
            'name'=>'required|max:255',
            'description'=>'required|max:255'
        ]);

        $role->name=$request->name;
        $role->description=$request->description;

        $role->save();


        return redirect('admin/roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role=Role::findOrFail($id);

        $role->delete();
        return redirect('admin/roles');
    }
}
