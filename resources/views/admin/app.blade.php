<!DOCTYPE html>
<html>
<head>
	@include('admin.head')
	@section('css')
	@show
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('admin.header')
@include('admin.sidebar')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @section('main-content')
    @show

</div>
</body>
</html>