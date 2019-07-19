@extends('admin.app')
@section('main-content')
 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Teacher Details</h3>
              	
               <button type="submit" class="btn btn-info ml-5" style="margin-left:180px;"><a href="{{route('teacher.create')}}"><span class="text-danger">Add teachers</span></a></button>
               
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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Created on</th>
                  <th>Action</th>
               
                </tr>
                <tbody>
                <tr>
                	@foreach($teacher as $thrs)
                  <td>{{$loop->index+1}}</td>
                  <td><img src="{{asset('storage/'.$thrs->image)}}" style="border:1px solid black; border-radius:30px;height:60px;width:60px;">
</td>
                  <td>{{$thrs->firstname}}</td>
                  <td>{{$thrs->email}}</td>
                  <td>{{$thrs->address}}</td>
                  <td>{{$thrs->created_at}}</td>
                   <td><a href="{{url('adminpanel/teacher/'.$thrs->id.'/edit')}}"><i class="fa fa-edit"></i></a>
                  <form action="{{url('adminpanel/teacher/'.$thrs->id)}}"class='form-group pull-right'method="post" id="delete-form-{{$thrs->id}}">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit"style="border:none; background:white;"><i class="fa fa-trash"></i></button>
                  
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