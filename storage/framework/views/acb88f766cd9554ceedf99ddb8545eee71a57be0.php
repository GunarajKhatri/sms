<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('panel/bower_components/select2/dist/css/select2.min.css')); ?>">
<script type="text/javascript"src="/blog/public/js/jqry.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>

<center>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Student Details</h3><br><br>
            </div>
            <!-- /.box-header -->
            <?php $__currentLoopData = $clas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form role="form" method="post" action="<?php echo e(url('/adminpanel/student/'.$class->id.'/store')); ?>"enctype="multipart/form-data">
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php echo e(csrf_field()); ?>

              <div class="box-body">
              	</div><div class="form-group">
                  <label for="exampleInputclassname">Firstname</label>
                  <input type="text" class="form-control"name="firstname" id="exampleInputname" placeholder="Enter firstname">
                </div>
                <div class="form-group">
                  <label for="exampleInputname">Lastname</label>
                  <input type="text" class="form-control"name="lastname"placeholder="Enter lastname">
                  <div class="form-group">
                  <label for="exampleInputname">Father's Name</label>
                  <input type="text" class="form-control"name="fathername"placeholder="Enter fathername">
                  <div class="form-group">
                  <label for="exampleInputname">Mother's Name</label>
                  <input type="text" class="form-control"name="mothername"placeholder="Enter mothername">
                </div>
                  <div class="form-group">
                  <label for="exampleInputbirth">DOB</label>
                  <input type="number" class="form-control"name="birth"placeholder="Enter birthday">
                </div>
                <div class="form-group">
                  <label for="exampleInputage">Age</label>
                  <input type="number" class="form-control"name="age"placeholder="Enter age">
                </div>
                <div class="form-group">
                  <label for="exampleInputsex">Sex</label>
                  <input type="text" class="form-control"name="sex"placeholder="Enter sex">
                </div>
                <div class="form-group">
                  <label for="exampleInputaddress">Address</label>
                  <input type="text" class="form-control"name="address"placeholder="Enter address">
                </div>
                  <div class="form-group" style="display:none;">
                  <label>Choose Class</label>
                  
                  <select class="form-control"name='class'>
                   
                    
                    <?php $__currentLoopData = $clas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($class->id); ?>"><?php echo e($class->classname); ?></option>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  
                </div>
                  <div class="form-group">
                  <label>Choose section</label>
                  
                  
                  <select class="form-control"name='section'>
                   
                      <option>Select section</option>
                   <?php $__currentLoopData = $sec; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $secs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option><?php echo e($secs->section); ?></option> 
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputphoto">Photo</label>
                  <input type="file" class="form-control"name="photo">
                </div>
                
               

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add Student</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          

         </center>
<script src="<?php echo e(asset('panel/bower_components/select2/dist/js/select2.full.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>