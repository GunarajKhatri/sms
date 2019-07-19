<?php $__env->startSection('css'); ?>
<style type="text/css">
	  .home{
		text-decoration:underline;
	}
</style>
<?php $__env->stopSection(); ?> 
<?php $__env->startSection('main-content'); ?>
<div class="wrapper">
<div class="container"><br>
<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <h5 class="d-4 mt-5"> Welcome! Mr. <strong> <?php echo e($data->username); ?> </strong>... You are selected in department called <?php echo e($data->department); ?>.<br>As per negotiation,We decided you to give salary Rs.<?php echo e($data->salary); ?> per month.Hope You work honourely and sincirely in our company and respect our vision. <br>
  Good Luck for Bright Future.. </h5>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('employee.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>