<!DOCTYPE html>
<html>
<head>
	<title>pagination</title>
</head>
<body>
	<table>
		<tbody>
	<thead>
	<tr>
		<th>Title</th>
		<th>Text</th>

	</tr>
	</thead>
	@foreach($todo as $todos)	
     <tr>
     	<td>{{$todos->title}}</td>
     	<td>{{$todos->text}}</td>


     </tr>

@endforeach;


</tbody>
	</table>
{{$todo->links()}}	

</body>
</html>