 
<?php $__env->startSection('css'); ?>
<style type="text/css">
	  .task{
		text-decoration:underline;
	}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?><br>
<div class="wrapper">
<div class="container">
<h4>As You became member of our co-operation....Here are some tasks for you.Hope you will fully be responsible for your tasks...</h4>
<h3 class="text-danger" style="text-decoration: underline;">Tasks Details:</h3>

 <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Tasks</th>
                  <th>Action</th>
                  
                </tr>
                <tbody>
                <tr>
                	<?php $__currentLoopData = $msg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msgs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td><?php echo e($loop->index +1); ?></td>
                  <td><?php echo e(substr($msgs->message,0,292)); ?>................<strong>click View for full details</strong></td>
                 
                  <td><a href="<?php echo e(route('employee-view',$msgs->id)); ?>">View</a> </td>
              
                </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
               </table>
           </div>




</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('employee.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>