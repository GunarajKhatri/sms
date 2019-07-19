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
	<?php $__currentLoopData = $todo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
     <tr>
     	<td><?php echo e($todos->title); ?></td>
     	<td><?php echo e($todos->text); ?></td>


     </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;


</tbody>
	</table>
<?php echo e($todo->links()); ?>	

</body>
</html>