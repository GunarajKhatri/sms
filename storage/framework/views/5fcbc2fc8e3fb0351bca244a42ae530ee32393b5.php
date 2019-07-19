<?php $__env->startSection('body'); ?>
<div>	
<a href="todo/create">Create New Lists</a>
<center><h1>To do list app</h1></center>
<strong>
<ul>	
	<li>
	<?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<a href="todo/<?php echo e($todo->id); ?>"><?php echo e($todo->title); ?></a>
</li><br>	
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</strong><br>
<strong>
<ul style="display:inline; ">	
	<li>
	<?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php if(auth()->check() && auth()->user()->hasRole('writer')): ?>
	<a href="todo/<?php echo e($todo->id); ?>/edit">edit</a>
	<?php endif; ?>
</li><br>	

</ul>
</strong>
<form action="todo/<?php echo e($todo->id); ?>"method="post"style="display: inline;">
	<?php echo e(csrf_field()); ?>

	<?php echo e(method_field('DELETE')); ?>


<button type="submit">delete</button>
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.ap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>