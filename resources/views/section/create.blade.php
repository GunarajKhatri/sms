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
              <h3 class="box-title">Add Sections</h3>
            </div>
          <br>
           <h3 class="bg-danger"> @if(count($errors)>0)
    @foreach($errors->all() as $error)
        {{$error}}
        @endforeach
    @endif </h3><br>
            <form role="form" method="post" action="{{url('/adminpanel/section/'.$clas->id.'/store')}}">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Choose Teachers</label>
                  <select class="form-control"name='teacher'>
                    <option>Select Teachers</option>
                    @foreach($teacher as $thr)
                   
                    <option>{{$thr->firstname}}</option>
                    @endforeach
                  </select>
                  
                </div>
              	<div class="form-group">
                  <label for="exampleInputsec">Section Name</label>
                  <input type="text" class="form-control"name="section" id="exampleInputsec" placeholder="Enter section name">
                </div>
                  <div class="form-group">
                  <label>Choose Class</label>
                  
                  <select class="form-control"name='class'>
                   
                    
                   
                    <option value="{{$clas->id}}">{{$clas->classname}}</option>
                   
                  </select>
                  
                </div>
                  <div class="form-group">
                  <label for="exampleInputsub">Subject Name</label>
                  <input type="text" class="form-control"name="subject" id="exampleInputsec" placeholder="Enter subject">
                </div>
              
                
                
               
            </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add Section</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          

         </center>
<script src="{{asset('panel/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script>
  $(document).ready(function(){
    //Initialize Select2 Elements
    $('.select2').select2()
  });
</script>
@endsection