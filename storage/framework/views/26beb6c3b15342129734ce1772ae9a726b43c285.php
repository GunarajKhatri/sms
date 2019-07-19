<?php $__env->startSection('main-content'); ?>

<?php $__env->startSection('main-content'); ?>
 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            	<center>
              <h1 class="box-title" style="font-size:30px; text-decoration:underline;">Class:-<?php echo e($clax->classname); ?>(<?php echo e($clax->number); ?>) Section Details</h1>
              	</center><br>
               <button type="submit" class="btn btn-info ml-5" style="margin-left:130px;"><a href="<?php echo e(url('/adminpanel/section/'.$clax->id)); ?>"><span class="text-danger">Add sections</span></a></button>
               
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Section</th>
                  <th>Teacher</th>
                  <th>Subject</th>
                  <th>Created on</th>
                  <th>Action</th>
               
                </tr>
                <tbody>
                <tr>
                	<?php $__currentLoopData = $clas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td><?php echo e($loop->index+1); ?></td>
                  <td><?php echo e($class->section); ?></td>
                  <td><?php echo e($class->teacher); ?></td>
                  <td><?php echo e($class->subject); ?></td>
                  <td><?php echo e($class->created_at); ?></td>
                  <td><a href="<?php echo e(url('/adminpanel/section/class/'.$class->id.'/edit')); ?>"><i class="fa fa-edit"></i></a>
                  <a href="<?php echo e(url('/adminpanel/section/class/destroy/'.$class->id)); ?>" style="margin-left:25px; "><i class="fa fa-trash"></i></a></td>
            
                </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
               </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

<?php $__env->stopSection(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>