<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

    <body>
        <style>
            .form-cont{
                border: 1px solid #e2e2e4;
                box-shadow: none;
                color: #c2c2c2;
                border-radius: 2px;
                padding: 6px 12px;
                height: 34px;
                width:155px;
                font-size: 14px;
            }
        </style>
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <h1> BS-CS Admission System</h1>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li><a href="<?php echo base_url('Home'); ?>">Home</a></li>
                            <li class="">  <img src="<?php echo base_url('img/user2-160x160.png'); ?>" width="40px" class="user-image img-circle" alt="User Image"> &nbsp;&nbsp; <?php echo $this->session->userdata('name'); ?></li>

                            <li><button type="button" id="sign_out" class="btn btn-info btn-sm">
                                    <span class="fa fa-sign-out" ></span> Log out
                                </button>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs end-->

        <!--container start-->
        <div class="login-bg">
            <div class="container">
                <div class="form-wrapper row">
                    <form class="col-md-1">

                    </form>
                    <form class="form-signin wow fadeInUp col-md-4 center-block" style="margin-bottom: 20px;">
                        <h2 class="form-signin-heading">Select Print Option</h2>
                        <div class="login-wrap">

                            <br /> <div class="">
                                <button  class="btn btn-default" onclick="window.open('fprint/index/<?php echo $this->session->userdata('id'); ?>');">Print Form</button>
                                <button  class="btn btn-default" onclick="window.open('cprint');">Print Challan</button>
                            </div>
                            <br /><br /><br />*Note : you must bring challan for appearance in entry test.<br />

                        </div>

                    </form>
                    <form class="col-md-2">

                    </form>
                    <form class="form-signin wow fadeInUp col-md-4 center-block" style="margin-bottom: 20px;">
                        <h2 class="form-signin-heading">Edit Saved Information</h2>
                        <div class="login-wrap">

                            <br /> <div class="">
                                <input type="button"  class="btn btn-default" onclick="edit_personal(<?php echo $this->session->userdata('id'); ?>);" value="Personal Info">
                                <input type="button"  class="btn btn-default" onclick="edit_academic(<?php echo $this->session->userdata('id'); ?>);" value="Academic Info">
                            </div>
                            <br /><br /><br />*Note : you must have to submit the information once entered correctly.<br />

                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!--container start-->
        <div class="login-bg">
            <div class="container">
                <div class="form-wrapper row">
                    <form class="col-md-1">

                    </form>
                    <form class="form-signin wow fadeInUp col-md-4 center-block" style="margin-bottom: 10px;">
                        <h2 class="form-signin-heading">Upload Picture</h2>
                        <div class="login-wrap">

                            <div id="challan">
                                <form>
                                    <img src=" <?php echo base_url('img/user_images/' . $this->session->userdata("id") . '.jpg'); ?>" width="150px" height="100px" id="image_user">  <input type="file" style="margin:5px;" id="picture_submit" required>
                                </form>
                            </div>
                            *Note : If your picture is not visible, email it to csadmissions@gcu.edu.pk with your CNIC number..

                        </div>

                    </form>
                    <form class="col-md-2">

                    </form>
                    <form class="form-signin wow fadeInUp col-md-4 center-block" style="margin-bottom: 20px;">
                        <h2 class="form-signin-heading">Test Slip and Result</h2>
                        <div class="login-wrap">

                            <br /> <div class="">
                                <input type="button" id="issue_slip" class="btn btn-default"  value="Entry Test Slip">
                                <input type="button"  class="btn btn-default"  value="Test Result">
                            </div>
                            <br /><br /><br />*Note : your seat plan can be viewed after verifying your challan form and test result will be displayed after 2or 3 weeks of test.<br />

                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModal" role="dialog" tabindex="-1" id="myModal" class="modal fade" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" id="m_head">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    </div>
                    <div class="modal-body" id="m_body" >

                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
        <script>
            var challan_status = '<?php echo $challan; ?>';
            if (challan_status != 'no') {
                document.getElementById('challan').innerHTML = challan_status;
            }
        </script>
        <!-- modal -->
    </body>

</html>
