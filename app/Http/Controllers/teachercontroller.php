<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Teacher;

class teachercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher=Teacher::all();
        return view('teacher.show',compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.createteacher');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $teacher=new Teacher;
        $this->validate($request,[
        'firstname'=>'required',
        'lastname'=>'required',
        'birth'=>'required',
        'age'=>'required|max:3',
        'email'=>'required|unique:teachers',
        'address'=>'required',
        'photo'=>'required',
     ]);
        $teacher->firstname=$request->firstname;
        $teacher->lastname=$request->lastname;
        $teacher->birth=$request->birth;
        $teacher->age=$request->age;
        $teacher->email=$request->email;
        $teacher->address=$request->address;
        if($request->hasFile('photo')){
         $filename=$request->photo->getClientOriginalName();
         $filesize=$request->photo->getClientSize();
         $request->photo->StoreAs('public',$filename);
        $teacher->image=$filename;
}
    $teacher->save();
    return redirect('/adminpanel/teacher');
     
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
        $teacher=Teacher::find($id);
        return view('teacher.edit',compact('teacher'));
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
       $teacher=Teacher::find($id);
       $this->validate($request,[
        'firstname'=>'required',
        'lastname'=>'required',
        'birth'=>'required',
        'age'=>'required|max:3',
        'email'=>'required',
        'address'=>'required',
        'photo'=>'required',
     ]);
        $teacher->firstname=$request->firstname;
        $teacher->lastname=$request->lastname;
        $teacher->birth=$request->birth;
        $teacher->age=$request->age;
        $teacher->email=$request->email;
        $teacher->address=$request->address;
        if($request->hasFile('photo')){
         $filename=$request->photo->getClientOriginalName();
         $filesize=$request->photo->getClientSize();
         $request->photo->StoreAs('public',$filename);
        $teacher->image=$filename;
}
    $teacher->save();
    return redirect('/adminpanel/teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher=Teacher::find($id);
        $teacher->delete();
        return redirect('/adminpanel/teacher');
}

}