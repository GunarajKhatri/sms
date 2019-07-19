<?php $__env->startSection('main-content'); ?><br>
<div>
<div>

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
                  <td><?php echo e(substr($msgs->message,0,203)); ?>...............</td>                 
                  <td><a href="<?php echo e(route('admintask-fullview',$msgs->id)); ?>">View</a> </td>
              
                </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </tbody>
               </table>
           </div>

</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>