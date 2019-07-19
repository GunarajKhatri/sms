<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo e(asset('panel/bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('panel/bower_components/font-awesome/css/font-awesome.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo e(asset('panel/bower_components/Ionicons/css/ionicons.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('panel/dist/css/AdminLTE.min.css')); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo e(asset('panel/dist/css/skins/_all-skins.min.css')); ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo e(asset('panel/bower_components/morris.js/morris.css')); ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo e(asset('panel/bower_components/jvectormap/jquery-jvectormap.css')); ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo e(asset('panel/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('panel/bower_components/bootstrap-daterangepicker/daterangepicker.css')); ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo e(asset('panel/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>School Management System</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
  <h1>   
    <?php if(count($errors)>0): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($error); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?></h1> 

    <p class="login-box-msg">Sign in to start your session</p>

    <form action="<?php echo e(route('admin.login')); ?>" method="post">
     <?php echo e(csrf_field()); ?>

      <div class="form-group has-feedback">
        <input type="email" class="form-control"name='email' placeholder="Email" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control"name='password'placeholder="Password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
       

        <br>
        <!-- /.col -->
        <div class="col-sm-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   
  </div>
  
<script src="<?php echo e(asset('admin/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- iCheck -->
<script src="<?php echo e(asset('admin/plugins/iCheck/icheck.min.js')); ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
