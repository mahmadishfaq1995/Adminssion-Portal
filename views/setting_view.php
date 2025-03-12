<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Developed By Ali Bin Asif">
        <link rel="shortcut icon" href="img/favicon.png">


        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <style>
            th{
                background-color: #787878;
                color:white;
            }
        </style>
    </head>

    <body class="hold-transition skin-blue sidebar-mini" >

        <div class="wrapper">

            <header class="main-header">

                <!-- Logo -->
                <a href="#" class="logo" style="background-color:#374850 !important;">
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b>Panel</span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" style="height:52px; background-color:#374850 !important;">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu" style="background-color:#374850 !important;">
                        <ul class="nav navbar-nav">

                            <li class="dropdown user user-menu" >
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url('img/user2-160x160.png'); ?>" class="user-image" alt="User Image">
                                    <span ><?php echo $this->session->userdata('name'); ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header" style="background-color:#374850 !important;">
                                        <img src="<?php echo base_url('img/user2-160x160.png'); ?>" class="img-circle" alt="User Image">
                                        <p>
                                            <?php echo $this->session->userdata('name'); ?> - <?php echo $this->session->userdata('username'); ?>
                                            <small>Member as Admin</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li></li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer" style="background-color:#374850 !important; margin-top:2px;">
                                        <div class="pull-left">
                                            <a href="<?php echo base_url('setting'); ?>" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <button id="sign_out" class="btn btn-default btn-flat">Sign out</button>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>

                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar" >
                <!-- sidebar: style can be f ound in sidebar.less -->
                <section class="sidebar" >
                    <!-- Sidebar user panel -->
                    <div class="user-panel" >
                        <div class="pull-left image">
                            <img src="<?php echo base_url('img/user2-160x160.png'); ?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $this->session->userdata('name'); ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">ADMIN NAVIGATION</li>
                        <li class=" treeview">
                            <a href="<?php echo base_url('admin'); ?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="<?php echo base_url('adminforms1'); ?>">
                                <i class="fa fa-files-o"></i>
                                <span>Admission forms</span>
                                <span class="pull-right-container">
                                    <span class="label label-primary pull-right">4</span>
                                </span>
                            </a>
                        </li>
                        <li class=" treeview" id="">
                            <a href="<?php echo base_url('adminresult'); ?>">
                                <i class="fa fa-edit"></i>
                                <span>Test Results</span>
                                <span class="pull-right-container">
                                    <span class="label label-primary pull-right">4</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('adminmail'); ?>">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <span class="pull-right-container">
                                    <small class="label pull-right bg-yellow">12</small>
                                    <small class="label pull-right bg-green">16</small>
                                    <small class="label pull-right bg-red">5</small>
                                </span>
                            </a>
                        </li>
                        <li class=" treeview" id="notification_reload">
                            <a href="<?php echo base_url('Notification'); ?>">
                                <i class="fa fa-bell-o"></i>
                                <span>Notification</span>
                            </a>
                        </li>
                        <li class="active treeview">
                            <a href="<?php echo base_url('setting'); ?>">
                                <i class="fa fa-gear "></i>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li class=" treeview" >
                            <a href="<?php echo base_url('verifychallan'); ?>">
                                <i class="fa fa-gear "></i>
                                <span>Verify Challan</span>
                            </a>
                        </li>
						<li class=" treeview">
                        <a href="<?php echo base_url('rollnumber'); ?>">
                            <i class="fa fa-files-o"></i> <span>Roll Number Sheets</span>

                        </a>
                    </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1 class="page-header">

                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Admin </a></li>
                        <li><a href="<?php echo base_url('Notification'); ?>"><i class="fa fa-bell-o"></i> Setting </a></li>
                    </ol>
                    <br><br>
                    <div class="container">

                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Change Your Information</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <thead> <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Email</th>
                                                <th>CNIC</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody id="setting_profile">

                                        </tbody>

                                    </table>
                                </div>

                            </div>
                            <!-- /.box -->


                            <!-- /.box -->
                        </div>
                    </div>
                    <div class="container">

                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Other Admin Logins</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table class="table table-bordered">
                                        <thead> <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>CNIC</th>
                                            </tr>
                                        </thead>
                                        <tbody id="setting_body">

                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <button type="button" class="btn btn-outline-primary btn-md pull-right" onclick="add_new_admin();"> + Add New </button>
                                </div>
                            </div>
                            <!-- /.box -->


                            <!-- /.box -->
                        </div>
                    </div>

                </section>

                <!-- Main content -->

            </div>



            <!-- ./wrapper -->
        </div>


        <!--small footer start -->
        <footer class="footer-small">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 pull-right">
                        <ul class="social-link-footer list-unstyled">
                            <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".3s"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".6s"><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".7s"><a href="#"><i class="fa fa-github"></i></a></li>
                            <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright">
                            <p>&copy; Copyright - dcs.gcu.edu.pk</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--small footer end-->
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModal" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" id="m_head">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body" id="m_body">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-success" id="btn_notice_submit" type="button" >Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal End -->
      <!--    <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script type="text/javascript" src="js/hover-dropdown.js"></script>
          <script defer src="js/jquery.flexslider.js"></script>
          <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>

          <script src="js/jquery.easing.min.js"></script>
          <script src="js/link-hover.js"></script>

          <script>
              wow = new WOW(
                {
                  boxClass:     'wow',      // default
                  animateClass: 'animated', // default
                  offset:       0          // default
                }
              )
              wow.init();
          </script>
        -->


    </body>
</html>
