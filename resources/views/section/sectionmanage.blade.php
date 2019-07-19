@extends('admin.app')
@section('main-content')<br>
<center>
<div class='card' style="width:50rem; border:1px solid grey; margin-top:20px;">
	<h2 class="card-title">Manage Sections For Below Classes:-</h2>
	@foreach($clas as $class)
<ul class='list-group list-group-flush'>
	<li class='list-group-item'><a href="{{url('/adminpanel/section/class/'.$class->id)}}" style="font-weight:bold;font-size:25px;">{{$class->classname}}({{$class->number}})</a></li>
</ul>	
@endforeach
</div>




</center>
@endsection