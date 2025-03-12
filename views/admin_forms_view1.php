<!DOCTYPE html>


<body class="hold-transition skin-blue sidebar-mini">


    <link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css') ?>" rel="stylesheet">

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
                                        <button id="sign_out" class="btn btn-default btn-flat">Sign out</button>>
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
                    <li class="active treeview" id="admin_fom">
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
                    <li class=" treeview">
                        <a href="<?php echo base_url('adminmail'); ?>">
                            <i class="fa fa-envelope"></i> <span >Mailbox</span>
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
                    <li class=" treeview">
                        <a href="<?php echo base_url('rollnumber'); ?>">
                            <i class="fa fa-files-o"></i> <span>Roll Number Sheets</span>

                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
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
                        <button class="btn btn-success" id="btn_suc" type="button" >Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1 class="page-header">
                    Registration Forms
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="<?php echo base_url('adminforms'); ?>"><i class="fa fa-dashboard"></i> Forms </a></li>
                </ol>
            </section>
            <style>
                table {
                    border-collapse: collapse;
                    width: 100%;
                }

                th, td {
                    text-align: left;
                    padding: 10px;
                }

                th {
                    background-color: #787878;
                    color: white;
                }
            </style>
            <!-- Main content -->
            <section class="content">
                <table class="table table-bordered" id="table" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Register ID</th>
                            <th>Name</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>CNIC</th>
                            <th>Father Name</th>
                            <th>Father Cnic</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>More</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>

                    <!-- <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Register ID</th>
                            <th>Name</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>CNIC</th>
                            <th>Father Name</th>
                            <th>Father Cnic</th>
                            <th>View</th>
                            <th>Edit</th>
                        </tr>
                    </tfoot> -->
                </table>
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



    <!--small footer start -->
    <footer class="footer-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 pull-right">
                    <ul class="social-link-footer list-unstyled">
                        <!--<li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".3s"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".6s"><a href="#"><i class="fa fa-skype"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".7s"><a href="#"><i class="fa fa-github"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a href="#"><i class="fa fa-youtube"></i></a></li>-->
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


    <!-- Modal End -->


    <script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
    <script type="text/javascript">

        var table;

        $(document).ready(function () {

            //datatables
            table = $('#table').DataTable({
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.

                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo site_url('adminforms1/ajax_list') ?>",
                    "type": "POST"
                },
                //Set column definition initialisation properties.
                "columnDefs": [
                    {
                        "targets": [0], //first column / numbering column
                        "orderable": false, //set not orderable
                    },
                ],
            });

        });


    </script>



</body>
</html>
