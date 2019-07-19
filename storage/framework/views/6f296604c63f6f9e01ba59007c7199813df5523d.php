<!DOCTYPE html>
<html>
<head>
	<title></title>
<?php echo $__env->make('employee.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('css'); ?>
<?php echo $__env->yieldSection(); ?>
</head>
<body>
<div class="wrapper">
<?php echo $__env->make('employee.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('main-content'); ?>

<?php echo $__env->yieldSection(); ?>
</div>
</body>
</html>








