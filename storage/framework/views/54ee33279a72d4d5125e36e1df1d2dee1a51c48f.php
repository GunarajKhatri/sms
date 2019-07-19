<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
        <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo e(asset('panel/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Gunaraj Co-operation</p>
          
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
       
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>

        </div><br>
        
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="<?php echo e(url('/adminpanel')); ?>">
            <i class="fa fa-dashboard disabled"></i> <span>Employee details</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo e(route('admin-task')); ?>"><i class="fa fa-circle-o"></i>Task</a></li>
            <li class='active'><a href="<?php echo e(url('/adminpanel/about/company')); ?>"><i class="fa fa-circle-o"></i>About</a></li>
          </ul>
        </li>
    
          
       
    </section>
    <!-- /.sidebar -->
  </aside>