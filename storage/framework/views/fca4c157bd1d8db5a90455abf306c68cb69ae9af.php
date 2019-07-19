<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('panel/bower_components/select2/dist/css/select2.min.css')); ?>">
<script type="text/javascript"src="/blog/public/js/jqry.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>

      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo e(route('admin-role')); ?>">
              <?php echo e(csrf_field()); ?>

              <div class="box-body">
              	</div><div class="form-group">
                  <label for="exampleInputname">Enter roles</label>
                  <input type="text" class="form-control"name="role" id="exampleInputname" placeholder="Enter roles">
                </div>
                <div class="form-group">
                <label>Permissions</label>
                <select class="form-control select2"name='permission' multiple="multiple" data-placeholder="Select a permissions"
                        style="width: 100%;">
                        <?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value='<?php echo e($permissions->id); ?>'><?php echo e($permissions->name); ?></option>
                 
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
      </div>
  </div>
  </div>




              <script src="<?php echo e(asset('panel/bower_components/select2/dist/js/select2.full.min.js')); ?>"></script>
<script>
  $(document).ready(function(){
    //Initialize Select2 Elements
    $('.select2').select2()
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>