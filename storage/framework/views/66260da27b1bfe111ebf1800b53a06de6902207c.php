<?php $__env->startSection('main-content'); ?>
 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Class Details</h3>
              	
               <button type="submit" class="btn btn-info ml-5" style="margin-left:180px;"><a href="<?php echo e(route('class.create')); ?>"><span class="text-danger">Add class</span></a></button>
               
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
                  <th>Class Name</th>
                  <th>Numeric Value</th>
                  <th>Created on</th>
                  <th>Action</th>
               
                </tr>
                <tbody>
                <tr>
                <?php $__currentLoopData = $clas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td><?php echo e($loop->index+1); ?></td>
                  <td><?php echo e($classes->classname); ?></td>
                  <td><?php echo e($classes->number); ?></td>
                  <td><?php echo e($classes->created_at); ?></td>
                  <td><a href="<?php echo e(url('adminpanel/class/'.$classes->id.'/edit')); ?>"><i class="fa fa-edit"></i></a>
                  <form action="<?php echo e(url('adminpanel/class/'.$classes->id)); ?>"class='form-group pull-right'method="post">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('DELETE')); ?>

                    <button type="submit" style="border:none; background:white;"><i class="fa fa-trash"></i></button>
                  
                  </form>
                </td>
              
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
<?php echo $__env->make('admin.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>