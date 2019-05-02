<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>AdminLTE | Data Tables</title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<link href="<?php echo base_url(); ?>glancePublic/css/admin/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>glancePublic/css/admin/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>glancePublic/css/admin/ionicons.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>glancePublic/css/admin/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>glancePublic/css/admin/AdminLTE.css" rel="stylesheet" type="text/css" />
</head>
<body class="skin-blue">
<header class="header"> <a href="index.html" class="logo"> 
  AdminLTE </a> 
  <nav class="navbar navbar-static-top" role="navigation"> 
    <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
    <div class="navbar-right">
      <ul class="nav navbar-nav">

        <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-user"></i> <span>Jane Doe <i class="caret"></i></span> </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header bg-light-blue"> <img src="img/avatar3.png" class="img-circle" alt="User Image" />
              <p> Jane Doe - Web Developer <small>Member since Nov. 2012</small> </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="col-xs-4 text-center"> <a href="#">Followers</a> </div>
              <div class="col-xs-4 text-center"> <a href="#">Sales</a> </div>
              <div class="col-xs-4 text-center"> <a href="#">Friends</a> </div>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left"> <a href="#" class="btn btn-default btn-flat">Profile</a> </div>
              <div class="pull-right"> <a href="#" class="btn btn-default btn-flat">Sign out</a> </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left"> 
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="left-side sidebar-offcanvas"> 
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar"> 
      <!-- Sidebar user panel -->
      <ul class="sidebar-menu">
        <li> <a href="index.html"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> </a> </li>
        <li> <a href="../widgets.html"> <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small> </a> </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-bar-chart-o"></i> <span>Charts</span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="treeview-menu">
            <li><a href="../charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>
            <li><a href="../charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-laptop"></i> <span>UI Elements</span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="treeview-menu">
            <li><a href="../UI/general.html"><i class="fa fa-angle-double-right"></i> General</a></li>
            <li><a href="../UI/icons.html"><i class="fa fa-angle-double-right"></i> Icons</a></li>
            <li><a href="../UI/buttons.html"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
            <li><a href="../UI/sliders.html"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
            <li><a href="../UI/timeline.html"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-edit"></i> <span>Forms</span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="treeview-menu">
            <li><a href="../forms/general.html"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
            <li><a href="../forms/advanced.html"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
            <li><a href="../forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview active"> <a href="#"> <i class="fa fa-table"></i> <span>Tables</span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="treeview-menu">
            <li><a href="simple.html"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
            <li class="active"><a href="data.html"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
          </ul>
        </li>
        <li> <a href="../calendar.html"> <i class="fa fa-calendar"></i> <span>Calendar</span> <small class="badge pull-right bg-red">3</small> </a> </li>
        <li> <a href="../mailbox.html"> <i class="fa fa-envelope"></i> <span>Mailbox</span> <small class="badge pull-right bg-yellow">12</small> </a> </li>
        <li class="treeview"> <a href="#"> <i class="fa fa-folder"></i> <span>Examples</span> <i class="fa fa-angle-left pull-right"></i> </a>
          <ul class="treeview-menu">
            <li><a href="../examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
            <li><a href="../examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
            <li><a href="../examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
            <li><a href="../examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
            <li><a href="../examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
            <li><a href="../examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
            <li><a href="../examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar --> 
  </aside>
  
  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> Dashboard</h1></section>
    
    <!-- Main content -->
    <section class="content">
      Dashboard icons
    </section>
    <!-- /.content --> 
  </aside>
  <!-- /.right-side --> 
</div>
<!-- ./wrapper -->
</body>
</html>