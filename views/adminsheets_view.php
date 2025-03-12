<!DOCTYPE html>


<body class="hold-transition skin-blue sidebar-mini">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('css/bootstrap.min.css'); ?>">
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

    <img src="<?php echo base_url('img/gcu-logo.png') ?>" width="90px" >
    <table style="display:inline; margin-left: 100px; text-align: center;">
        <tr>
            <td style="font-size:24px;">
                Government College University Lahore
            </td>
        </tr>
        <tr>
            <td style="font-size:18px;">
                Department of Computer Science
            </td>
        </tr>
        <tr>
            <td style="font-size:16px;">
                Seating Plan/Attendance Sheet  for  BSCS Entry Test 2017
            </td>
        </tr>
        <tr>
            <td style="font-size:18px;">
                <span style="border:1px solid; padding: 2px; margin-top: 10px;"> <b >Room</b> : <?php echo str_replace("%20", " ", $room); ?> </span>&nbsp;&nbsp;&nbsp; <span style="border:1px solid; padding: 2px; margin-top: 10px;"><b>Building</b> : <?php echo $building; ?></span>
            </td>
        </tr>
        <tr style="margin-top:10px;">
            <td style="font-size:18px;">
                <span style="border:1px solid; padding:2px; margin-top: 10px;"> <b >Roll Number from</b> : <?php echo $rollfrom . '-' . $rollto; ?> </span>
            </td>
        </tr>
    </table>
    <img src="<?php echo base_url('img/logo.png') ?>" width="90px" class="pull-right">
    <br>
    <div class="wrapper">


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">




            <section class="content">

                <div class="row">
                    <!-- Left col -->
                    <div class="col-md-8 col-lg-8 col-sm-8 box box-info" >

                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" style='table-layout:fixed; text-align: center;'>
                                    <thead> <tr>
                                            <th>Image</th>
                                            <th>Roll Number</th>
                                            <th>Name</th>
                                            <th>Father Name</th>
                                            <th>Signature</th>
                                        </tr>
                                    </thead>
                                    <tbody id="room_body">
                                        <?php echo $rooms; ?>
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

    </div>


</body>
</html>
