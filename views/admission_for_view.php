<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <body onload="window.scrollTo(0, 0);">

        <!--breadcrumbs start-->
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <h1 >BS Admission Form</h1>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li class="active"><a href="<?php echo base_url('Home'); ?>">Admission Form</a></li>
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
        <style>
            .form-cont{
                border: 1px solid #e2e2e4;
                box-shadow: none;
                color: #c2c2c2;
                border-radius: 2px;
                padding: 6px 12px;
                height: 34px;
                font-size: 14px;
            }
        </style>
        <!--bread crumbs end-->
        <div class="row">
            <div class="col-md-2">
                <img src="img/step1.png" width="235px" style="margin-top:15px;">
                <ul style="margin-left:15px; list-style: none;">
                    <li><label class="control-label"><div class="row"><div class="col-md-2"><i class="fa fa-hand-o-right fa-2x" aria-hidden="true"></i></div> <div class="col-md-10">Read all columns before filling.</div></div></label></li>
                    <li><label class="control-label"><div class="row"><div class="col-md-2"><i class="fa fa-hand-o-right fa-2x" aria-hidden="true"></i></div> <div class="col-md-10"> Do not enter wrong information.</div></div></label></li>
                    <li><label class="control-label"><div class="row"><div class="col-md-2"><i class="fa fa-hand-o-right fa-2x" aria-hidden="true"></i></div> <div class="col-md-10"> Every Field in the form is compulsory.</div></div></label></li>
                    <li><label class="control-label"><div class="row"><div class="col-md-2"><i class="fa fa-hand-o-right fa-2x" aria-hidden="true"></i></div> <div class="col-md-10"> Once form is submitted, can not be changed.</div></div></label></li>
                </ul>
            </div>
            <div class="col-md-10" style="padding:20px;" >
                <!--container start-->
                <div id="new_form_div" class="login-bg">

                    <form class="form-adm fadeInUp" method="POST" autocomplete="off">
                        <h2 class="form-adm-heading">Department of Computer Science, 2017 BS Admission Form</h2><br>
                        <div id="part" style=" background-color:#F0F0F0;"> Section-I Personal Information</div>
                        <img src="img/2.png" width="200px" id="profile_pic">
                        <input type="file" id="img_upload" required> <span> * Image size should be less then 2MB</span>


                        <!-- <div class="form-group" style="margin-top:10px;">
                             <table class="table table-responsive " border="1px solid" bordercolor="#DDDDDD" style="">
                                 <tr style="background:#48CFAD; color:white;">
                                     <th style="background:white; color:#797979; font-weight: bold;" rowspan="2">Reserved Seat: </th>
                                     <td>No</td>
                                     <td>Hafiz Quran</td>
                                     <td>Sports</td>
                                 </tr>
                                 <tr>
                                     <td><input type="radio" id="reserve_seat1" name="reserve_seat" value="no" checked></td>
                                     <td><input type="radio" id="reserve_seat2" name="reserve_seat" value="hafiz" ></td>
                                     <td><input type="radio" id="reserve_seat3" name="reserve_seat" value="sports" ></td>
                                 </tr>
                             </table>
                         </div>-->

                        <div class="" style=" background-color:#F0F0F0;">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Full Name :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"  name="fullname" id="fullname" placeholder="abc xyz" value="<?php echo $this->session->userdata('name'); ?>" onKeyPress=
                                           "Names('error_fullname');" disabled required>
                                    <div id="error_fullname" style="color:red; display:none;"> * Enter a valid Name *</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top:5px;">Date of Birth :</label>
                                <div class="col-sm-10"  style="margin-top:5px;">
                                    <select name="dob1" id="dob1" style="width:auto; display: inline !important;" class="form-control " required>
                                        <option>Day</option>
                                        <?php
                                        for ($i = 1; $i <= 31; $i++)
                                            echo '<option value="' . $i . '">' . $i . '</option>';
                                        ?>
                                    </select>
                                    <select name="dob2" id="dob2" style="width:auto; display: inline !important;" class="form-control " required>
                                        <option>Month</option><?php
                                        for ($i = 1; $i <= 12; $i++)
                                            echo '<option value="' . $i . '">' . $i . '</option>';
                                        ?>
                                    </select>
                                    <select name="dob3" id="dob3" style="width:auto; display: inline !important;" class="form-control " required>
                                        <option>Year</option><?php
                                        for ($i = 1992; $i <= 2005; $i++)
                                            echo '<option value="' . $i . '">' . $i . '</option>';
                                        ?>
                                    </select>
                                    <div id="error_dob" style="color:red; display:none;"> * Enter a valid Date *</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top:5px;">Gender</label>
                                <div class="col-sm-10">
                                    <div class="radio" style="margin-top:5px;">
                                        <label>
                                            <?php
                                            if ($this->session->userdata('gender') == "male") {
                                                echo '<input type="radio" name="gender" id="male" value="male" checked> Male';
                                            } else {
                                                echo '<input type="radio" name="gender" id="male" value="male" > Male';
                                            }
                                            ?>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <?php
                                            if ($this->session->userdata('gender') == "female") {
                                                echo '<input type="radio" name="gender" id="female" value="female" checked> Female';
                                            } else {
                                                echo '<input type="radio" name="gender" id="female" value="female"> Female';
                                            }
                                            ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top:5px;">Applicant CNIC:</label>
                                <div class="col-sm-10" style="margin-top:5px;">
                                    <input type="text" class="form-cont" name="cnic" maxlength="5" id="cnic1" value="<?php echo substr($this->session->userdata('cnic'), 0, 5); ?>" placeholder="XXXXX" onKeyPress=
                                           "Numeric('error_cnic');" disabled required> -
                                    <input type="text" class="form-cont" name="cnic" maxlength="7" id="cnic2" value="<?php echo substr($this->session->userdata('cnic'), 5, 7); ?>" placeholder="XXXXXXX" onKeyPress=
                                           "Numeric('error_cnic');" disabled required> -
                                    <input type="text" class="form-cont" name="cnic" maxlength="1" id="cnic3" value="<?php echo substr($this->session->userdata('cnic'), 12, 1); ?>" placeholder="X" onKeyPress=
                                           "Numeric('error_cnic');" disabled required>
                                    <div id="error_cnic" style="color:red; display:none;"> * Enter a valid CNIC *</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top:5px;">Father/Guardian</label>
                                <div class="col-sm-10">
                                    <div class="radio" style="margin-top:5px;">
                                        <label>
                                            <input type="radio" name="relation" id="father" value="father" checked> Father
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="relation" id="guardian" value="guardian"> Guardian
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3" style="margin-top:5px;">Father / Guardian Name :</label>
                                <div class="col-sm-9" style="margin-top:5px;">
                                    <input type="text" class="form-control" name="fname" id="fname" placeholder="abc xyz" onKeyPress="Names('error_fname');" required>
                                    <div id="error_fname" style="color:red; display:none;"> * Enter a valid Name *</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label" style="margin-top:5px;">Father / Guardian CNIC :</label>
                                <div class="col-sm-9" style="margin-top:5px;">
                                    <input type="text" class="form-cont" name="fcnic" maxlength="5" id="fcnic1" placeholder="XXXXX" onKeyPress=
                                           "Numeric('error_fcnic');" required> -
                                    <input type="text" class="form-cont" name="fcnic" maxlength="7" id="fcnic2" placeholder="XXXXXXX" onKeyPress=
                                           "Numeric('error_fcnic');" required> -
                                    <input type="text" class="form-cont" name="fcnic" maxlength="1" id="fcnic3" placeholder="X" onKeyPress=
                                           "Numeric('error_fcnic');" required>

                                    <div id="error_fcnic" style="color:red; display:none;"> * Enter a valid CNIC *</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top:5px;"> F/G Monthly Income :</label>
                                <div class="col-sm-10" style="margin-top:5px;">
                                    <input type="text" class="form-control" maxlength="7" name="fincome" id="fincome" placeholder="XXXXXXX" onKeyPress=
                                           "Numeric('error_income');" required>
                                    <div id="error_income" style="color:red; display:none;"> * Enter valid Amount *</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top:5px;">Phone No:</label>
                                <div class="col-sm-10" style="margin-top:5px;">
                                    <input type="text" class="form-control" maxlength="15" name="phone_no" id="phone_no" placeholder="042XXXXXXX" onKeyPress=
                                           "Numeric('error_phone_no');">
                                    <div id="error_phone_no" style="color:red; display:none;"> * Enter valid Phone Number *</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top:5px;">Mobile No :</label>
                                <div class="col-sm-10" style="margin-top:5px;">
                                    <input type="text" class="form-control" maxlength="15" placeholder="03XXXXXXXXX" name="mobile_no" id="mobile_no" onKeyPress=
                                           "Numeric('error_mobile_no');" required>
                                    <div id="error_mobile_no" style="color:red; display:none;"> * Enter valid Mobile Number *</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top:5px;">Email Address:</label>
                                <div class="col-sm-10" style="margin-top:5px;">
                                    <input type="email" class="form-control" placeholder="Someone@example.com" name="email" id="email" placeholder="Email" value="<?php echo $this->session->userdata('email'); ?>" autofocus=""
                                           disabled required>
                                    <div id="error_email" style="color:red; display:none;"> * Enter  valid email address *</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top:5px;">Residential Address:</label>
                                <div class="col-sm-10" style="margin-top:5px;">
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label" style="margin-top:5px;">District:</label>
                                <div class="col-sm-10" style="margin-top:5px;">
                                    <input type="text" class="form-control" id="district" name="district" placeholder="District" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <br>
                                    <input type="submit" style="background-color:#48CFAD;" id="save_for" class="btn btn-success btn-block" value="Process Information" >
                                </div>
                            </div>

                        </div><!-- /.bs-example  -->
                    </form>

                </div>
                <!--container end-->
            </div>
        </div><br><br>
        <script>

        </script>
    </body>
</html>