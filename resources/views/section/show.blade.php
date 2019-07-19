@extends('admin.app')
@section('main-content')
@extends('admin.app')
@section('main-content')
 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            	<center>
              <h1 class="box-title" style="font-size:30px; text-decoration:underline;">Class:-{{$clax->classname}}({{$clax->number}}) Section Details</h1>
              	</center><br>
               <button type="submit" class="btn btn-info ml-5" style="margin-left:130px;"><a href="{{url('/adminpanel/section/'.$clax->id)}}"><span class="text-danger">Add sections</span></a></button>
               
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
                  <th>Section</th>
                  <th>Teacher</th>
                  <th>Subject</th>
                  <th>Created on</th>
                  <th>Action</th>
               
                </tr>
                <tbody>
                <tr>
                	@foreach($clas as $class)
                  <td>{{$loop->index+1}}</td>
                  <td>{{$class->section}}</td>
                  <td>{{$class->teacher}}</td>
                  <td>{{$class->subject}}</td>
                  <td>{{$class->created_at}}</td>
                  <td><a href="{{url('/adminpanel/section/class/'.$class->id.'/edit')}}"><i class="fa fa-edit"></i></a>
                  <a href="{{url('/adminpanel/section/class/destroy/'.$class->id)}}" style="margin-left:25px; "><i class="fa fa-trash"></i></a></td>
            
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


@endsection