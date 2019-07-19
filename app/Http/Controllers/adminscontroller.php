<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\admin;
use Auth;
use Hash;
class adminscontroller extends Controller
{

     public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $data=admin::all();
        return view('admin.show',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form');
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
   
     $user=new admin;
     $this->validate($request,[
        'username'=>'required',
        'email'=>'required|unique:admins',
        'password'=>'required|unique:admins',
        'role'=>'required',
     ]
     );
     $user->username=$request->username;
     $user->email=$request->email;
     $user->password=bcrypt($request->password);
     $user->role=$request->role;
     $user->save();
     return redirect('/adminpanel'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data=admin::find($id);
        return view('admin.edit',compact('data'));
        
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
        
          $user=admin::find($id);
          
        $this->validate($request,[
           'username'=>'required',
           'email'=>'required',
           'oldpassword'=>'required',
           'password'=>'required',
           'role'=>'required',
        ]
        );
       
        
        $user->username=$request->username;
        $user->email=$request->email;
        if(Hash::check($request->oldpassword,$request->dbpassword)){
        $user->password=bcrypt($request->password);
        $user->role=$request->role;
        $user->save();
        return redirect('/adminpanel');
        }
        else{
            return 'sorry';
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        
        $user=admin::find($id);
        $user->delete();
        return redirect('/adminpanel');
    }
   
   
}
