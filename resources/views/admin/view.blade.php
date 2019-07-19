@extends('admin.app')
@section('main-content')<br>
<div>
<div>

 <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Tasks</th>
                  <th>Action</th>
                  
                </tr>
                <tbody>
                <tr>
                	@foreach($msg as $msgs)
                  <td>{{$loop->index +1}}</td>
                  <td>{{substr($msgs->message,0,203)}}...............</td>                 
                  <td><a href="{{route('admintask-fullview',$msgs->id)}}">View</a> </td>
              
                </tr>
                   @endforeach 
                </tbody>
               </table>
           </div>

</div>
</div>


@endsection
