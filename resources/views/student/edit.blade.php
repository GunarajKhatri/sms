@extends('admin.app')
@section('css')
<link rel="stylesheet" href="{{asset('panel/bower_components/select2/dist/css/select2.min.css')}}">
<script type="text/javascript"src="/blog/public/js/jqry.js"></script>
@endsection
@section('main-content')

<center>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Student Details</h3><br><br>
            </div>
               <br>
           <h3 class="bg-danger"> @if(count($errors)>0)
    @foreach($errors->all() as $error)
        {{$error}}
        @endforeach
    @endif </h3><br>
   
           
            <form role="form" method="post" action="{{url('/adminpanel/student/class/'.$std->id.'/update/'.$cls->id)}}"enctype="multipart/form-data">
            
              {{csrf_field()}}
              <div class="box-body">
              	</div><div class="form-group">
                  <label for="exampleInputclassname">Firstname</label>
                  <input type="text" class="form-control"name="firstname" id="exampleInputname" placeholder="Enter firstname" value="{{$std->firstname}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputname">Lastname</label>
                  <input type="text" class="form-control"name="lastname"placeholder="Enter lastname"value="{{$std->lastname}}">
                  <div class="form-group">
                  <label for="exampleInputname">Father's Name</label>
                  <input type="text" class="form-control"name="fathername"placeholder="Enter fathername"value="{{$std->fathername}}">
                  <div class="form-group">
                  <label for="exampleInputname">Mother's Name</label>
                  <input type="text" class="form-control"name="mothername"placeholder="Enter mothername"value="{{$std->mothername}}">
                </div>
                  <div class="form-group">
                  <label for="exampleInputbirth">DOB</label>
                  <input type="number" class="form-control"name="birth"placeholder="Enter birthday"value="{{$std->birth}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputage">Age</label>
                  <input type="number" class="form-control"name="age"placeholder="Enter age"value="{{$std->age}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputsex">Sex</label>
                  <input type="text" class="form-control"name="sex"placeholder="Enter sex"value="{{$std->sex}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputaddress">Address</label>
                  <input type="text" class="form-control"name="address"placeholder="Enter address"value="{{$std->address}}">
                </div>
                  <div class="form-group" style="display:none;">
                  <label>Choose Class</label>
                  
                  <select class="form-control"name='class'>
                   
                    
                   
                    <option value="{{$cls->id}}">{{$cls->classname}}</option>
                 
                  </select>
                  
                </div>
                  <div class="form-group">
                  <label>Choose section</label>
                  
                  
                  <select class="form-control"name='section'>
                    <option>Select section</option>
                   @foreach($sec as $secs)
                      
                  
                    <option>{{$secs->section}}</option> 
                    @endforeach
                  </select>
                 
                </div>
                <div class="form-group">
                  <label for="exampleInputphoto">Photo</label>
                  <input type="file" class="form-control"name="photo">
                </div>
                
               

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add Student</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          

         </center>
<script src="{{asset('panel/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
@endsection