

<!doctype html>

<html lang="en">

<head>
	<style type="text/css">
		ul li{
             border: 1px solid blue;
             font-weight: bold;

		}
	</style>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="">

<meta name="author" content="">




<title>Blog Template for Bootstrap</title>
<script type="text/javascript"src="/blog/public/js/jqry.js"></script>






<!-- Bootstrap core CSS -->

<link rel="stylesheet" type="text/css" href="/blog/public/css/bootstrap.css">


<!-- Custom styles for this template -->

<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="/blog/public/css/blog.css">
</head>



<body>



<div class="container">

<header class="blog-header py-3">

<div class="row flex-nowrap justify-content-between align-items-center">

<div class="col-4 pt-1">
<a class="text-white bg-primary rounded m-0 btn btn-sm  " href="/blog/public/" style="font-size: 20px;max-height: 5%;text-decoration: none;">Back</a>

<a class="text-white bg-danger font-weight-bold rounded btn btn-md  ml-4" href="#" style="font-size: 20px;max-height: 10%;text-decoration: none;">Subscribe</a>

</div>
                    

                                    <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       logout
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                       {{csrf_field()}}	
                                            </form> 


                                
                           
         

<div class="col-4 d-flex justify-content-end align-items-center">

<a class="text-muted" href="#">

<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>

</a>

<a class="btn btn-sm btn-outline-secondary" href="/blog/public/register">Sign up</a>

</div>

</div>

</header>



<div class="nav-scroller py-1 mb-2">

<nav class="nav d-flex justify-content-between">
	<a class="p-2 text-muted" href="#">Home</a>
	<a class="p-2 text-muted" href="#">Technology</a>
	<a class="p-2 text-muted" href="#">Sports</a>
	<a class="p-2 text-muted" href="#">Market</a>
	<a class="p-2 text-muted" href="#">Business</a>
	<a class="p-2 text-muted" href="#">others</a>

</nav>

</div>












<div class="blog-post">
@foreach($post as $posts)
<h2 class="blog-post-title">{{$posts->head}}</h2>

<p class="blog-post-meta"> {{$posts->created_at}} <a href="#" style="text-decoration: none;" class="text-dark font-weight-bold">By Admin</a></p><br>
<p>{{$posts->main}}</p>

@role('writer|Admin','admin')
<a href="/blog/public/post/{{$posts->id}}"class='text-default'style="text-decoration: none;">create</a>
@endrole
@role('editor|Admin','admin')
<a href="/blog/public/post/{{$posts->id}}"class='text-default'style="text-decoration: none;">Edit</a>
@endrole

@endforeach
<br>
{{$post->links()}}

</div><!-- /.blog-post -->


<br>
<button class='btn btn-md btn-outline-primary bg-primary text-white'id="shp">ADD POST	</button>   
</div><!-- /.blog-main -->

<br>
<form class="post" style="display: none;" method="post" action={{url("/post")}}>
	{{csrf_field()}}
<div class='form-group text-center container'>
<label class='font-weight-bold text-dark'style='font-size: 20px'>Enter Heading</label>
<input type="text" name="topic"class="form-control border-primary">	
</div><br>	
<div class='form-group text-center container'>
<label class='font-weight-bold text-dark'style='font-size: 20px'>Enter Content</label>
<textarea class='form-control border-primary' name='body'style='height: 300px;'></textarea>
</div><br>
<center>
<input type="submit" name="add"class="btn-lg btn-outline-primary "value="Post" style="width: 300px;">	</center>
</form><br>
<form class="comment" method="post" action={{url("/post/comment")}}>
	{{csrf_field()}}
<div class='form-group container text-center'>
	<textarea class='form-control rounded border-primary' name='sec'style='height: 150px;'placeholder="Write a comment..............."></textarea><br>
<input type="submit" name="add"class="btn-lg btn-outline-primary "value="Comment" style="width: 300px;">
</div>	

</form><br>
<div class='container'>
	@foreach($comment as  $comments)
	@foreach($user as  $users)
<h4 class='text-default'>{{$users->name}}</h4>
<p class='ml-5'>{{$comments->feedback}}</p>

@endforeach
@endforeach
</div>
<footer class="blog-footer text-center m-0">
<marquee>

<p class="text-success font-weight-bold">Gunaraj Production,copyright@2019</p>
</marquee>

</footer>



<!-- Bootstrap core JavaScript

================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

<script type="text/javascript">

$(document).ready(function(){
$('#shp').click(function () {	// body...
 	$('.post').show();

 });
});
</script>
<script type="text/javascript"src="/blog/public/js/bootstrap.js"></script>
<script type="text/javascript"src="/blog/public/js/jquery.js"></script>
<script type="text/javascript"src="/blog/public/js/popper.min.js"></script>



</body>


</html>

