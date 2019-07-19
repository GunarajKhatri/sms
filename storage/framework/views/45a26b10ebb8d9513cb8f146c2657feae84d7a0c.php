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
              <h3 class="box-title">Add Sections</h3>
            </div>
          <br>
           <h3 class="bg-danger"> <?php if(count($errors)>0): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($error); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?> </h3><br>
            <form role="form" method="post" action="<?php echo e(url('/adminpanel/section/'.$clas->id.'/store')); ?>">
              <?php echo e(csrf_field()); ?>

              <div class="box-body">
                <div class="form-group">
                  <label>Choose Teachers</label>
                  <select class="form-control"name='teacher'>
                    <option>Select Teachers</option>
                    <?php $__currentLoopData = $teacher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
                    <option><?php echo e($thr->firstname); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  
                </div>
              	<div class="form-group">
                  <label for="exampleInputsec">Section Name</label>
                  <input type="text" class="form-control"name="section" id="exampleInputsec" placeholder="Enter section name">
                </div>
                  <div class="form-group">
                  <label>Choose Class</label>
                  
                  <select class="form-control"name='class'>
                   
                    
                   
                    <option value="<?php echo e($clas->id); ?>"><?php echo e($clas->classname); ?></option>
                   
                  </select>
                  
                </div>
                  <div class="form-group">
                  <label for="exampleInputsub">Subject Name</label>
                  <input type="text" class="form-control"name="subject" id="exampleInputsec" placeholder="Enter subject">
                </div>
              
                
                
               
            </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add Section</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          

         </center>
<script src="<?php echo e(asset('panel/bower_components/select2/dist/js/select2.full.min.js')); ?>"></script>
<script>
  $(document).ready(function(){
    //Initialize Select2 Elements
    $('.select2').select2()
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>