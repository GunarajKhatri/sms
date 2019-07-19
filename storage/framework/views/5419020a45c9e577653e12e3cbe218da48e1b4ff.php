<?php $__env->startSection('editId',$items->id); ?>
<?php $__env->startSection('editTitle',$items->title); ?>
<?php $__env->startSection('editBody',$items->text); ?>
<?php $__env->startSection('editMethod'); ?>
<?php echo e(method_field('PUT')); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('todo.create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>