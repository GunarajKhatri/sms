<!DOCTYPE html>
<html>
<head>
	<?php echo $__env->make('admin.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php $__env->startSection('css'); ?>
	<?php echo $__env->yieldSection(); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php echo $__env->make('admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php $__env->startSection('main-content'); ?>
    <?php echo $__env->yieldSection(); ?>

</div>
</body>
</html>