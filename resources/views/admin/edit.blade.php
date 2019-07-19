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
              <h3 class="box-title">Quick Example</h3>
            </div>
            <br>
           <h3 class="bg-danger"> @if(count($errors)>0)
    @foreach($errors->all() as $error)
        {{$error}}
        @endforeach
    @endif </h3><br>
            <form role="form" method="post" action="{{route('admin-update',$data->id)}}">
              {{csrf_field()}}
             
              <div class="box-body">
              	</div><div class="form-group">
                  <label for="exampleInputname">Enter Username</label>
                  <input type="text" class="form-control"name="username" id="exampleInputname" placeholder="Enter username"value='{{$data->username}}'>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control"name="email" id="exampleInputEmail1" placeholder="Enter email"value='{{$data->email}}'>
                  <input type="hidden" name="dbpassword"value="{{$data->password}}">
                  <div class="form-group">
                  <label for="example">Old Password</label>
                  <input type="text" class="form-control"name="oldpassword" id="example" placeholder="Enter old Password">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">New Password</label>
                  <input type="password" class="form-control"name="password"id="exampleInputPassword1" placeholder="Enter New Password">
                </div>
               
              
                
                
               <div class="radio form-group second">
                   <label><b>Select Roles</b></label><br><br>
                    <label>
                      <input type="radio" name="role" id="optionsRadios2" value="Admin" @if($data->role=='Admin')
                        checked
                        @endif >
                      Admin
                    </label>
                     <label>
                      <input type="radio" name="role" id="optionsRadios2" value="Employee" @if($data->role=='Employee')
                        checked
                        @endif >
                      Employee
                    </label>
                  </div>
            

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
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