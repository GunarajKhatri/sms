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
              <h3 class="box-title">Edit Class</h3><br>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{url('adminpanel/class/'.$clas->id)}}">
              {{csrf_field()}}
              {{method_field('PUT')}}
              <div class="box-body">

              	</div><div class="form-group">
                  
                  <label for="exampleInputclassname">Class Name</label>
                  <input type="text" class="form-control"name="classname" id="exampleInputemail" placeholder="Enter classname"value="{{$clas->classname}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Numeric value</label>
                  <input type="number" class="form-control"name="number"placeholder="In Number"value="{{$clas->number}}">
                 
                </div>
               
                 
                
               
 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update Class</button>
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