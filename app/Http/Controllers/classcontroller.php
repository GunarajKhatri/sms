<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classmod;
class classcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clas=Classmod::all();
        return view('admin.class',compact('clas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createclass');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $class=new Classmod;
        $this->validate($request,[
        'classname'=>'required',
        'number'=>'required',       
     ]
     );
        $class->classname=$request->classname;
        $class->number=$request->number;
        $class->save();
        return redirect('/adminpanel/class');
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
        $clas=Classmod::find($id);

        return view('admin.classedit',compact('clas'));
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
        $class=Classmod::find($id);
        $this->validate($request,[
        'classname'=>'required',
        'number'=>'required',       
       ]);

         $class->classname=$request->classname;
        $class->number=$request->number;
        $class->save();
        return redirect('/adminpanel/class');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $clas=Classmod::find($id);
        $clas->delete();
        return redirect('/adminpanel/class');
    }
}
