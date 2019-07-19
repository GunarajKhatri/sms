<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body><center>
<form method="post"action=<?php echo e(url('/registeruser')); ?>>
	<?php echo e(csrf_field()); ?>

Enter username <br>
<input type="text" name='name'><br>	
Enter email <br>
<input type="text" name='email'><br>
Enter password <br>
<input type="password" name='password'><br>
<input type="submit" name="submit"value="Register">


</form>
</center><nav>
	

</nav>
</body>
</html>