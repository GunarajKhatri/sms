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
              <h3 class="box-title">Edit Teacher Details</h3><br><br>
            </div>
          <h3 class="bg-danger"> @if(count($errors)>0)
    @foreach($errors->all() as $error)
        {{$error}}
        @endforeach
    @endif </h3>
            <form role="form" method="post" action="{{url('adminpanel/teacher/'.$teacher->id)}}"enctype="multipart/form-data">
              {{csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">
              	</div><div class="form-group">
                  <label for="exampleInputclassname">Firstname</label>
                  <input type="text" class="form-control"name="firstname" id="exampleInputname" placeholder="Enter firstname"value="{{$teacher->firstname}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputname">Lastname</label>
                  <input type="text" class="form-control"name="lastname"placeholder="Enter lastname" value="{{$teacher->lastname}}">
                </div>
                  <div class="form-group">
                  <label for="exampleInputbirth">DOB</label>
                  <input type="number" class="form-control"name="birth"placeholder="Enter birthday" value="{{$teacher->birth}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputage">Age</label>
                  <input type="number" class="form-control"name="age"placeholder="Enter age" value="{{$teacher->age}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputemail">Email</label>
                  <input type="email" class="form-control"name="email"placeholder="Enter email" value="{{$teacher->email}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputaddress">Address</label>
                  <input type="text" class="form-control"name="address"placeholder="Enter address" value="{{$teacher->address}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputphoto">Photo</label>
                  <input type="file" class="form-control"name="photo" value="">
                </div>
                
               

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Edit Teacher</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          

         </center>
<script src="{{asset('panel/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
@endsection