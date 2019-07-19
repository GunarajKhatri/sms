<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
<?php $__currentLoopData = $file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $files): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<img src="<?php echo e(asset('storage/'.$files->filename)); ?>">
<a href="<?php echo e(asset('storage/'.$files->filename)); ?>" download="<?php echo e($files->filename); ?>">Download</a>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>