<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
        <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('panel/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
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
          
          <ul class="treeview-menu">
            <li class="active"><a href='{{url("/adminpanel/class")}}'><i class="fa fa-circle-o"></i>Class Details</a></li>
            <li class='active'><a href="{{url('/adminpanel/teacher')}}"><i class="fa fa-circle-o"></i>Teacher Details</a></li>
            <li class='active'><a href="{{url('/adminpanel/section/class/show')}}"><i class="fa fa-circle-o"></i>Section Details</a></li>
            <li class='active'><a href="{{url('/adminpanel/student/class/show')}}"><i class="fa fa-circle-o"></i>Section Details</a></li>
                 <li class='active'><a href="{{url('/adminpanel')}}"><i class="fa fa-circle-o"></i>Admin Details</a></li>
            
  
          </ul>
        </li>
    
          
       
    </section>
    <!-- /.sidebar -->
  </aside>