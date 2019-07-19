
@extends('admin.app')
@section('css')
<link rel="stylesheet" href="{{asset('panel/bower_components/select2/dist/css/select2.min.css')}}">
<script type="text/javascript"src="/blog/public/js/jqry.js"></script>
@endsection
@section('main-content')

      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('admin-permission') }}">
              {{csrf_field()}}
              <div class="box-body">
              	</div><div class="form-group">
                  <label for="exampleInputpermission">Enter permission</label>
                  <input type="text" class="form-control"name="permission" id="exampleInputname" placeholder="Enter permission">
                </div>
               
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
      </div>
  </div>
  </div>




    
@endsection
