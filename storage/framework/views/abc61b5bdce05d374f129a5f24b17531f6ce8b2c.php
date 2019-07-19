<?php $__env->startSection('body'); ?>
<br>
<center>
<h1>Create new list</h1><br>
<div>
	<form method="post"action="/blog/public/todo@yield('editId')">
	<?php echo e(csrf_field()); ?>

	<?php $__env->startSection('editMethod'); ?>
	<?php echo $__env->yieldSection(); ?>
	Enter title <br></b>
	<input type="text" name="title"value="<?php echo $__env->yieldContent('editTitle'); ?>"><br>
<input type="text" name="body"value="<?php echo $__env->yieldContent('editBody'); ?>">
<input type="submit" name="submit">
</center>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.ap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>