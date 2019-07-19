@extends('admin.app')
@section('main-content')
@extends('admin.app')
@section('main-content')
 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            	<center>
              <h1 class="box-title" style="font-size:30px; text-decoration:underline;">Class:-{{$clas->classname}}({{$clas->number}}) Students Details</h1>
              	</center><br>
               <button type="submit" class="btn btn-info ml-5" style="margin-left:130px;"><a href="{{url('/adminpanel/student/create/'.$clas->id)}}"><span class="text-danger">Add students</span></a></button>
               
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
                  <th>Photo</th>
                  <th>Student name</th>
                  <th>Sex</th>
                  <th>Section</th>
                  <th>Registered on</th>
                  <th>Action</th>
               
                </tr>
                <tbody>
                <tr>
                	@foreach($std as $stds)
                  <td>{{$loop->index+1}}</td>
                  <td><img src="{{asset('storage/'.$stds->image)}}" style="border:1px solid black; border-radius:30px;height:60px;width:60px;"></td>
                  <td>{{$stds->firstname}}</td>
                  <td>{{$stds->sex}}</td>
                  <td>{{$stds->section}}</td>
                  <td>{{$stds->created_at}}</td>
                  <td><a href="{{url('/adminpanel/student/class/'.$stds->id.'/edit/'.$stds->classmod_id)}}"><i class="fa fa-edit"></i></a>
                  <a href="{{url('/adminpanel/student/class/destroy/'.$stds->id)}}" style="margin-left:25px; "><i class="fa fa-trash"></i></a></td>
            
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