<?php $__env->startSection('main-content'); ?>
 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Teacher Details</h3>
              	
               <button type="submit" class="btn btn-info ml-5" style="margin-left:180px;"><a href="<?php echo e(route('teacher.create')); ?>"><span class="text-danger">Add teachers</span></a></button>
               
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
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Created on</th>
                  <th>Action</th>
               
                </tr>
                <tbody>
                <tr>
                	<?php $__currentLoopData = $teacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thrs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td><?php echo e($loop->index+1); ?></td>
                  <td><img src="<?php echo e(asset('storage/'.$thrs->image)); ?>" style="border:1px solid black; border-radius:30px;height:60px;width:60px;">
</td>
                  <td><?php echo e($thrs->firstname); ?></td>
                  <td><?php echo e($thrs->email); ?></td>
                  <td><?php echo e($thrs->address); ?></td>
                  <td><?php echo e($thrs->created_at); ?></td>
                   <td><a href="<?php echo e(url('adminpanel/teacher/'.$thrs->id.'/edit')); ?>"><i class="fa fa-edit"></i></a>
                  <form action="<?php echo e(url('adminpanel/teacher/'.$thrs->id)); ?>"class='form-group pull-right'method="post" id="delete-form-<?php echo e($thrs->id); ?>">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('DELETE')); ?>

                    <button type="submit"style="border:none; background:white;"><i class="fa fa-trash"></i></button>
                  
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