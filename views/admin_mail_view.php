<!DOCTYPE html>


<body class="hold-transition skin-blue sidebar-mini">
    <style>
        th{
            background-color: #787878;
            color:white;
        }
        td{
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }
        .modal-body:not(.two-col) { padding:0px }
        .glyphicon { margin-right:5px; }
        .glyphicon-new-window { margin-left:5px; }
        .modal-body .radio,.modal-body .checkbox {margin-top: 0px;margin-bottom: 0px;}
        .modal-body .list-group {margin-bottom: 0;}
        .margin-bottom-none { margin-bottom: 0; }
        .modal-body .radio label,.modal-body .checkbox label { display:block; }
        .modal-footer {margin-top: 0px;}
        @media screen and (max-width: 325px){
            .btn-close {
                margin-top: 5px;
                width: 100%;
            }
            .btn-results {
                margin-top: 5px;
                width: 100%;
            }
            .btn-vote{
                margin-top: 5px;
                width: 100%;
            }

        }
        .modal-footer .btn+.btn {
            margin-left: 0px;
        }
        .progress {
            margin-right: 10px;
        }
    </style>
    <div class="wrapper">

        <header class="main-header" >

            <!-- Logo -->
            <a href="#" class="logo" style="background-color:#374850">
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
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->

                        <!-- Notifications: style can be found in dropdown.less -->

                        <!-- Tasks: style can be found in dropdown.less -->

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu" >
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url('img/user2-160x160.png'); ?>" class="user-image" alt="User Image">
                                <span ><?php echo $this->session->userdata('name'); ?></span>
                            </a>
                            <ul class="dropdown-menu" >
                                <!-- User image -->
                                <li class="user-header" style="background-color:#374850 !important;">
                                    <img src="<?php echo base_url('img/user2-160x160.png'); ?>" class="img-circle" alt="User Image">

                                    <p >
                                        <?php echo $this->session->userdata('name'); ?> - <?php echo $this->session->userdata('username'); ?>
                                        <small>Member as Admin</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li>

                                </li>
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
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
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
                    <li class="active treeview">
                        <a href="<?php echo base_url('adminmail'); ?>">
                            <i class="fa fa-envelope"></i> <span>Mailbox</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-yellow">12</small>
                                <small class="label pull-right bg-green">16</small>
                                <small class="label pull-right bg-red">5</small>
                            </span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="<?php echo base_url('Notification'); ?>">
                            <i class="fa fa-bell-o"></i>
                            <span>Notification</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="<?php echo base_url('setting'); ?>">
                            <i class="fa fa-gear"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li class=" treeview" >
                        <a href="<?php echo base_url('verifychallan'); ?>">
                            <i class="fa fa-gear "></i>
                            <span>Verify Challan</span>
                        </a>
                    </li>
					<li class="active treeview">
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
                    Mail Section
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-dashboard"></i>Mail box </a></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Info boxes -->

                <!-- /.row -->

                <!-- /.row -->

                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <div class="col-md-8 col-lg-8 col-sm-8 box box-info" >
                        <div class="box-header with-border">
                            <h3 class="box-title">Latest Mails</h3>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" style='table-layout:fixed'>
                                    <thead> <tr>
                                            <th style="width: 30px">#</th>
                                            <th>Sender</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Status</th>
                                            <th>Last Reply</th>
                                            <th style="width: 80px">Reply</th>
                                            <th style="width: 80px">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody id="mail_body">

                                    </tbody>

                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.col -->


                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->
    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="panel-title" id="contactLabel"><span class="fa fa-reply"></span> Reply to the queries of peoples.</h4>
                </div>
                <form action="#" method="post" accept-charset="utf-8">
                    <div class="modal-body" style="padding: 5px;">

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                <input class="form-control" name="email" id="email" placeholder="E-mail" type="text" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                <input class="form-control" name="subject"  id="subject" placeholder="Subject" type="text" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <textarea style="resize:vertical;" class="form-control" placeholder="Message..." rows="6" name="comment" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer" style="margin-bottom:-14px;">
                        <input type="submit" class="btn btn-success" value="Send"/>
                            <!--<span class="glyphicon glyphicon-ok"></span>-->
                        <input type="reset" class="btn btn-danger" value="Clear" />
                            <!--<span class="glyphicon glyphicon-remove"></span>-->
                        <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- Modal -->



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
    <div class="modal fade" id="mymodal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="box-header with-border">
                        <h3 class="box-title">List of Students</h3>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="box box-info" >

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                    <thead>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ali Bin Asif</td>
                                        </tr>
                                        <tr>
                                            <td>Ahmad ishaq</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
