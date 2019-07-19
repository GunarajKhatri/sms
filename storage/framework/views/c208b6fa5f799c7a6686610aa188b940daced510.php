<?php $__env->startSection('main-content'); ?><br>
<center>
<div class='card' style="width:50rem; border:1px solid grey; margin-top:20px;">
	<h2 class="card-title">Manage Students For Below Classes:-</h2>
	<?php $__currentLoopData = $clas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul class='list-group list-group-flush'>
	<li class='list-group-item'><a href="<?php echo e(url('/adminpanel/student/class/'.$class->id)); ?>" style="font-weight:bold;font-size:25px;"><?php echo e($class->classname); ?>(<?php echo e($class->number); ?>)</a></li>
</ul>	
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>




</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>