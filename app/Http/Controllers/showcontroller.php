<?php

namespace App\Http\Controllers;
use App\Teacher;
use Illuminate\Http\Request;
use App\Classmod;
use App\Section;
class showcontroller extends Controller
{
	// public function create($id){
	// 	$clas=Classmod::find($id);
 //    	$teacher=Teacher::all();
 //    	return view('section.create',compact('teacher','clas'));
 //    }

    public function store(Request $request,$id){
        
    	$sec=new Section;
    	$this->validate($request,[
        'section'=>'required',
        'teacher'=>'required',
        'subject'=>'required',
        'class'=>'required',
     ]);
    $sec->section=$request->section;
    $sec->teacher=$request->teacher;
    $sec->subject=$request->subject;
    $sec->classmod_id=$request->class;
    $sec->save();
    return redirect('/adminpanel/section/class/'.$id);

     
    
    }

    public function creates($id){
    	$teacher=Teacher::all();
    	$clas=Classmod::find($id);
    	return view('section.create',compact('teacher','clas'));

    }
    public function sec($id){
   $clas=Classmod::find($id)->section;
   $clax=Classmod::find($id);
    return view('section.show',compact('clas','clax'));
	}

 	public function showclass(){
 	$clas=Classmod::all();
 	return view('section.sectionmanage',compact('clas'));
 	}

 	public function edit($id)
 	{
 		$sec=Section::find($id);
 		$clas=array(Section::find($id)->classmod);
 		$tech=Teacher::all();
 		return view('section.edit',compact('sec','tech','clas'));
 	}
 	public function update(Request $request,$id,$num){

 			$sec=Section::find($id);
 			
    	$this->validate($request,[
        'section'=>'required',
        'teacher'=>'required',
        'subject'=>'required',
        'class'=>'required',
     ]);
    $sec->section=$request->section;
    $sec->teacher=$request->teacher;
    $sec->subject=$request->subject;
    $sec->classmod_id=$request->class;
    $sec->save();
    return redirect('/adminpanel/section/class/'.$num);
 	}

 	public function destroy($id){
 	$sec=Section::find($id);
 	$secs=array(Section::find($id));
 	foreach($secs as $sec){
 		$idd=$sec->classmod_id;
 	}
 	$sec->delete();
 	return redirect('/adminpanel/section/class/'.$idd);


 	}



}
