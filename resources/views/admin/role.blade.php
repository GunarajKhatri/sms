
@extends('admin.app')
@section('css')
<link rel="stylesheet" href="{{asset('panel/bower_components/select2/dist/css/select2.min.css')}}">
<script type="text/javascript"src="/blog/public/js/jqry.js"></script>
@endsection
@section('main-content')

      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('admin-role') }}">
              {{csrf_field()}}
              <div class="box-body">
              	</div><div class="form-group">
                  <label for="exampleInputname">Enter roles</label>
                  <input type="text" class="form-control"name="role" id="exampleInputname" placeholder="Enter roles">
                </div>
                <div class="form-group">
                <label>Permissions</label>
                <select class="form-control select2"name='permission' multiple="multiple" data-placeholder="Select a permissions"
                        style="width: 100%;">
                        @foreach($permission as $permissions)
                  <option value='{{ $permissions->id }}'>{{ $permissions->name }}</option>
                 
                
                @endforeach
                </select>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
      </div>
  </div>
  </div>




              <script src="{{asset('panel/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script>
  $(document).ready(function(){
    //Initialize Select2 Elements
    $('.select2').select2()
  });
</script>
@endsection
