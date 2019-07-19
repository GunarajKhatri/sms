<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
@foreach($file as $files)
<img src="{{asset('storage/'.$files->filename)}}">
<a href="{{asset('storage/'.$files->filename)}}" download="{{$files->filename}}">Download</a>

@endforeach
</body>
</html>