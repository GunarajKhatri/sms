<?php $__env->startSection('body'); ?>
<center><h1><?php echo e($item->title); ?></h1>
<p><?php echo e($item->text); ?></p>
</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.ap', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>