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
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo e(route('admin-register')); ?>">
              <?php echo e(csrf_field()); ?>

              <div class="box-body">
              	</div><div class="form-group">
                  <label for="exampleInputname">Enter Username</label>
                  <input type="text" class="form-control"name="username" id="exampleInputname" placeholder="Enter username">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control"name="email" id="exampleInputEmail1" placeholder="Enter email">
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control"name="password" id="exampleInputPassword1" placeholder="Enter Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputsalary">Salary</label>
                  <input type="integer" class="form-control"name="salary" id="exampleInputPassword1" placeholder="Enter salary">
                </div>
                 <div class="radio form-group first">
                   <label><b>Select Department</b></label><br>
                    <label>
                      <input type="radio"name='department'value="web development">
                      Web Devlopment
                    </label><br>
                     <label>
                      <input type="radio"name='department'value="Andriod Development">
                      Andriod Devlopment
                    </label>
                  </div>
                
                
               <div class="radio form-group second">
                   <label><b>Select Roles</b></label><br><br>
                    <label>
                      <input type="radio" name="role" id="optionsRadios2" value="Admin">
                      Admin
                    </label>
                     <label>
                      <input type="radio" name="role" id="optionsRadios2" value="Employee">
                      Employee
                    </label>
                  </div>
            

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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