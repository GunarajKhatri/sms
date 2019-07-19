@extends('admin.app')
@section('main-content')
 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User Details</h3>
              	
               <button type="submit" class="btn btn-info ml-5" style="margin-left:180px;"><a href="{{route('admin-register')}}"><span class="text-danger">Add users</span></a></button>
               
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
                  <th>Username</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Created on</th>
                  <th>Action</th>
               
                </tr>
                <tbody>
                <tr>
                	@foreach($data as $datas)
                  <td>{{$loop->index+1}}</td>
                  <td>{{$datas->username}}</td>
                  <td>{{$datas->email}}</td>
                  <td>{{$datas->role}}</td>
                  <td>{{$datas->created_at}}</td>
                  <td><a href="{{route('admin-edit',$datas->id)}}"><i class="fa fa-edit"></i></a>
                  <a href="{{route('admin-delete',$datas->id)}}" style="margin-left:25px; "><i class="fa fa-trash"></i></a></td>
              
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