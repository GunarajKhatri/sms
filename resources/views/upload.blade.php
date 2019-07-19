<!DOCTYPE html>
<html>
<head>
	<title>upload file</title>
</head>
<body>
<form method='post'action="{{url('/store')}}" enctype="multipart/form-data">
	{{csrf_field()}}
<input type="file" name="image"><br>

<input type="submit" name="Upload">

</form>

</body>
</html>