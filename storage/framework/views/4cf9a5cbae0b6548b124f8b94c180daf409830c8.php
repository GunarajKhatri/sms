<!DOCTYPE html>
<html>
<head>
	<?php echo $__env->make('admin\head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php echo $__env->make('admin\header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin\footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
</body>
</html>