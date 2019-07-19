 
<?php $__env->startSection('main-content'); ?><br>
<div >
<h3 class="text-danger" style="text-decoration: underline;">Task:</h3>
<?php $__currentLoopData = $view; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $views): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h4><?php echo e($views->message); ?></h4>
<a href="<?php echo e(route('admintask-view')); ?>" class='text-white bg-primary rounded' style="text-decoration: none; font-size:25px;margin-left:20px;">Back</a>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>