@extends('admin.app')
@section('main-content')
 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Class Details</h3>
              	
               <button type="submit" class="btn btn-info ml-5" style="margin-left:180px;"><a href="{{route('class.create')}}"><span class="text-danger">Add class</span></a></button>
               
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Class Name</th>
                  <th>Numeric Value</th>
                  <th>Created on</th>
                  <th>Action</th>
               
                </tr>
                <tbody>
                <tr>
                @foreach($clas as $classes)
                  <td>{{$loop->index+1}}</td>
                  <td>{{$classes->classname}}</td>
                  <td>{{$classes->number}}</td>
                  <td>{{$classes->created_at}}</td>
                  <td><a href="{{url('adminpanel/class/'.$classes->id.'/edit')}}"><i class="fa fa-edit"></i></a>
                  <form action="{{url('adminpanel/class/'.$classes->id)}}"class='form-group pull-right'method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" style="border:none; background:white;"><i class="fa fa-trash"></i></button>
                  
                  </form>
                </td>
              
                </tr>
             @endforeach
                </tbody>
               </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

@endsection