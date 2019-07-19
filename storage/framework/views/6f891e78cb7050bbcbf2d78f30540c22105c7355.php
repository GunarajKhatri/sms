<?php $__env->startSection('main-content'); ?>
 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User Details</h3>
              	
               <button type="submit" class="btn btn-info ml-5" style="margin-left:180px;"><a href="<?php echo e(route('admin-register')); ?>"><span class="text-danger">Add users</span></a></button>
               
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
                  <th>Username</th>
                  <th>Email</th>
                  <th>Salary</th>
                  <th>Department</th>
                  <th>Role</th>
                  <th>Created on</th>
                  <th>Action</th>
               
                </tr>
                <tbody>
                <tr>
                	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td><?php echo e($loop->index+1); ?></td>
                  <td><?php echo e($datas->username); ?></td>
                  <td><?php echo e($datas->email); ?></td>
                  <td>Rs.<?php echo e($datas->salary); ?></td>
                  <td><?php echo e($datas->department); ?></td>
                  <td><?php echo e($datas->role); ?></td>
                  <td><?php echo e($datas->created_at); ?></td>
                  <td><a href="<?php echo e(route('admin-edit',$datas->id)); ?>">Edit</a> <span>|</span> <a href="<?php echo e(route('admin-delete',$datas->id)); ?>">Delete</a></td>
              
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