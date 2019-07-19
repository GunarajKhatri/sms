<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classmod;
use App\Student;
use App\Section;
class studentscontroller extends Controller
{
    public function showclass(){
 	$clas=Classmod::all();
 	return view('student.studentmanage',compact('clas'));
 	}

 	public function showstd($id){
 		$clas=Classmod::find($id);
        $std=Classmod::find($id)->student;

 		return view('student.show',compact('clas','std'));
 	}

 	public function create($id){
 		$clas=array(Classmod::find($id));
 		$sec=Classmod::find($id)->section;
 		return view('student.create',compact('sec','clas'));
 	}

    public function store(Request $request,$id)
    {
       $student=new Student;
        $this->validate($request,[
        'firstname'=>'required',
        'lastname'=>'required',
        'fathername'=>'required',
        'mothername'=>'required',
        'birth'=>'required',
        'age'=>'required|max:3',
        'sex'=>'required',
        'address'=>'required',
        'class'=>'required',
        
        'photo'=>'required',
     ]);
        $student->firstname=$request->firstname;
        $student->lastname=$request->lastname;
        $student->fathername=$request->fathername;
        $student->mothername=$request->mothername;
        $student->birth=$request->birth;
        $student->age=$request->age;
        $student->sex=$request->sex;
        $student->classmod_id=$request->class;
        $student->section=$request->section;
        $student->address=$request->address;
        if($request->hasFile('photo')){
        $filename=$request->photo->getClientOriginalName();
        $filesize=$request->photo->getClientSize();
        $request->photo->StoreAs('public',$filename);
		$student->image=$filename;
	
	} 
	$student->save(); 
    return redirect('/adminpanel/student/class/'.$id);    	
}

public function destroy($id){
$std=Student::find($id);
    $stds=array(Student::find($id));
    foreach($stds as $std){
        $idd=$std->classmod_id;
    }
    $std->delete();
    return redirect('/adminpanel/student/class/'.$idd);
}

public function update(Request $request,$id,$num){

$std=Student::find($id);
 $this->validate($request,[
        'firstname'=>'required',
        'lastname'=>'required',
        'fathername'=>'required',
        'mothername'=>'required',
        'birth'=>'required',
        'age'=>'required|max:3',
        'sex'=>'required',
        'address'=>'required',
        'class'=>'required',
        'section'=>'required',
        'photo'=>'required',
     ]);
       $std->firstname=$request->firstname;
       $std->lastname=$request->lastname;
       $std->fathername=$request->fathername;
       $std->mothername=$request->mothername;
       $std->birth=$request->birth;
       $std->age=$request->age;
       $std->sex=$request->sex;
       $std->classmod_id=$request->class;
       $std->section=$request->section;
       $std->address=$request->address;
        if($request->hasFile('photo')){
        $filename=$request->photo->getClientOriginalName();
        $filesize=$request->photo->getClientSize();
        $request->photo->StoreAs('public',$filename);
       $std->image=$filename;
    
    } 
   $std->save(); 
    return redirect('/adminpanel/student/class/'.$num);




}





public function edit($id,$num){
$std=Student::find($id);

$cls=Student::find($id)->classmod;
$sec=Classmod::find($num)->section;

return view('student.edit',compact('std','cls','sec'));


}
}
