<?php $__env->startSection('main-content'); ?>
 <form role="form"method="post"action="<?php echo e(route('admin-task')); ?>">
 	<?php echo e(csrf_field()); ?>

 <div class="box-body">
 <div class="form-group">                 
               	<div class='container'>
                <h1 class="text-center text-success">Task Assignmet</h1>	
                    <div class="checkbox">
                    	<h4>Assign Tasks To:</h4><br>
                    	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        
                        <input type="checkbox"name='emp[]'value='<?php echo e($datas->id); ?>' style="margin-left:20px;"><span style="margin-left:38px; font-weight: bold;"><?php echo e($datas->username); ?></span> <br>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                   
                  </div>                
               </div>
                </div>
                </div>
                <div class="box-body">
                <div class="form-group">
                  <h4>Tasks:</h4>
                  <textarea class="form-control"name='message'rows="10" placeholder="Enter message"required=''></textarea>
                </div>
                </div>

                <div class="container">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?php echo e(route('admintask-view')); ?>"class="btn btn-danger" style="margin-left:20px;">See Tasks Details</a>
              </div>            
          </div>


</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>