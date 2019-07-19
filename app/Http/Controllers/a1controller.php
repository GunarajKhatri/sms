<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class admincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

        $role=Role::all();
      
        return view('admin.form',compact('role'));
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
      
     $admin=new admin;
     $this->validate($request,[
        'username'=>'required',
        'email'=>'required',
        'password'=>'required'
     ]
     );
     $admin->username=$request->username;
     $admin->email=$request->email;
     $admin->password=bcrypt($request->password);
     $admin->save(); 
     //Role::create(['name'=>'reader','guard_name'=>'admin']);
     //Permission::create(['name'=>'edit post','guard_name'=>'admin']);
   
     $admin->assignRole($request->role); 

     
    
      

 
      // return redirect({{route('admin-register')}}


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
}
