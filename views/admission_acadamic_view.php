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

                            <li>
                                <button type="button" id="sign_out" class="btn btn-info btn-sm">
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
                <img src="img/step2.png" width="235px" style="margin-top:15px;">
                <ul style="margin-left:15px; list-style: none;">
                    <li><label class="control-label"><div class="row"><div class="col-md-2"><i class="fa fa-hand-o-right fa-2x" aria-hidden="true"></i></div> <div class="col-md-10">Read all columns before filling.</div></div></label></li>
                    <li><label class="control-label"><div class="row"><div class="col-md-2"><i class="fa fa-hand-o-right fa-2x" aria-hidden="true"></i></div> <div class="col-md-10"> Do not enter wrong information.</div></div></label></li>
                    <li><label class="control-label"><div class="row"><div class="col-md-2"><i class="fa fa-hand-o-right fa-2x" aria-hidden="true"></i></div> <div class="col-md-10"> Every Field in the form is compulsory.</div></div></label></li>
                    <li><label class="control-label"><div class="row"><div class="col-md-2"><i class="fa fa-hand-o-right fa-2x" aria-hidden="true"></i></div> <div class="col-md-10"> Once form is submitted, can not be changed.</div></div></label></li>
                </ul>
            </div>
            <div class="col-md-10" style="padding:20px;" >
                <!--container start-->
                <div class="login-bg">

                    <form class="form-adm wow fadeInUp" method="POST" autocomplete="off">
                        <h2 class="form-adm-heading">Department of Computer Science, 2017 BS Admission Form</h2><br>
                        <div id="part" style=" background-color:#F0F0F0;"> Section-II Academic Information</div> <br><br>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label" style="background-color:#F0F0F0; padding: 6px 12px;">Matric/O-level</label>
                            <div class="col-sm-10">

                                <select name="year_matric" id="year_matric" style="width:175px; display: inline !important;" class="form-control " required>
                                    <option>Year Matric</option>
                                    <?php
                                    for ($i = 2015; $i >= 2005; $i--)
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                    ?>
                                </select>
                                <input type="text" class="form-cont" id="rollno_matric" name="rollno_matric" placeholder="Roll No" onKeyPress="Numeric('error_rollno_matric');" required>
                                <div id="error_rollno_matric" style="color:red; display:none;"> * Enter a valid roll no *</div>

                                <input type="text" class="form-cont" id="marks_matric" maxlength="4" name="marks_matric" placeholder="Marks Obtained" onKeyPress="Numeric('error_marks_matric');" required>
                                <div id="error_marks_matric" style="color:red; display:none;"> * Enter a valid marks *</div>

                                <input type="text" class="form-cont" id="total_matric" maxlength="4" name="total_matric" placeholder="Total Marks" onKeyPress="Numeric('error_total_matric');" required>
                                <div id="error_total_matric" style="color:red; display:none;"> * Enter valid total marks *</div>

                                <select name ="board_matric" id ="board_matric" class="form-control" style="width: 175px; display: inline;">
                                    <option value="">Matriculation Board</option>
                                    <option value="Lahore">Lahore</option>
                                    <option value="Faisalabad">Faisalabad</option>
                                    <option value="Federal">Federal</option>
                                    <option value="Multan">Multan</option>
                                    <option value="Sargodha">Sargodha</option>
                                    <option value="Sahiwal">Sahiwal</option>
                                    <option value="Bahawalpur">Bahawalpur</option>
                                    <option value="Gujranwala">Gujranwala</option>
                                    <option value="Rawalpindi">Rawalpindi</option>
                                    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                    <option value="Peshawar">Peshawar</option>
                                    <option value="Malakand">Malakand</option>
                                    <option value="Swat">Swat</option>
                                    <option value="Bannu">Bannu</option>
                                    <option value="Abbotabad">Abbotabad</option>
                                    <option value="Mardan">Mardan</option>
                                    <option value="Azad Kashmir">Azad kashmir</option>
                                    <option value="Balochistan">Balochistan</option>
                                    <option value="Karachi">Karachi</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                    <option value="Sukkur">Sukkur</option>
                                    <option value="Mirpurkhas">Mirpur Khas</option>
                                    <option value="Agha Khan University">Agha Khan University Board</option>
                                    <option value="O-Level">O-level</option>
                                    <option value="other foreign certification">other foreign certification</option>
                                    <option value="other local board">other local board</option>
                                </select>
                            </div>
                        </div> <br /><br />
                        <div class="form-group">
                            <br /> <br />
                            <label for="inputPassword3" class="col-sm-2 control-label" style="background-color:#F0F0F0; padding: 6px 12px;">Inter-Part 1 (Optional)</label>
                            <div class="col-sm-10">

                                <select name="year_inter1" id="year_inter1" style="width:175px; display: inline !important;" class="form-control " >
                                    <option value="">Year Inter- Part I </option><?php
                                    for ($i = 2017; $i >= 2002; $i--)
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                    ?>
                                </select>
                                <input type="text" class="form-cont" id="rollno_inter1" name="rollno_inter1" value="" placeholder="Roll No" onKeyPress="Numeric('error_rollno_inter1');" >
                                <div id="error_rollno_inter1" style="color:red; display:none;"> * Enter a valid roll no *</div>

                                <input type="text" class="form-cont" id="marks_inter1" maxlength="4" value="" name="marks_inter1" placeholder="Marks Obtained" onKeyPress="Numeric('error_marks_inter1');" >
                                <div id="error_marks_inter1" style="color:red; display:none;"> * Enter valid marks *</div>

                                <input type="text" class="form-cont" id="total_inter1" maxlength="4" value="" name="total_inter1" placeholder="Total Marks" onKeyPress="Numeric('error_total_inter1');" >
                                <div id="error_total_inter1" style="color:red; display:none;"> * Enter valid total marks *</div>

                               <!-- <select name ="major_inter1" id="major_inter1" class="form-control" style="width: 175px; display: inline;" onchange="change_combination('major_inter');" disabled>
                                    <option value="">Subject Combination</option>
                                    <option value="F.Sc. Pre Engineering">F.Sc. Pre Engineering</option>
                                    <option value="F.Sc. Pre Medical with Additional Math.">F.Sc. Pre Medical with Additional Math.</option>
                                    <option value="Mathematics- Computer Science- Physics">Mathematics, Computer Science, Physics</option>
                                    <option value="Mathematics- Computer Science- Statistics">Mathematics, Computer Science, Statistics</option>
                                    <option value="Mathematics- Statistics- Physics">Mathematics, Statistics, Physics</option>
                                    <option value="A-Level or Equivalent with Math.">A-Level or Equivalent with Math.</option>
                                    <option value="Mathematics- Statistics- Economics">Mathematics, Statistics, Economics</option>
                                    <option value="Mathematics- Computer Science- Economics">Mathematics, Computer Science, Economics</option>
                                    <option value="Equivalence Certification from IBCC"> Equivalence Certification from IBCC</option>
                                    <option value="Other foreign qualifications are eligible only if an equivalence certificate is issued by IBCC"> Other foreign qualifications are eligible only if an equivalence certificate is issued by IBCC </option>
                                </select>

                                <select name ="board_inter1" id ="board_inter1" class="form-control" onchange="change_combination('board_inter');" style="width: 175px; display: inline;" disabled>
                                    <option value="">Board Inter I</option>
                                    <option value="Lahore">Lahore</option>
                                    <option value="Faisalabad">Faisalabad</option>
                                    <option value="Federal">Federal</option>
                                    <option value="Multan">Multan</option>
                                    <option value="Sargodha">Sargodha</option>
                                    <option value="Sahiwal">Sahiwal</option>
                                    <option value="Bahawalpur">Bahawalpur</option>
                                    <option value="Gujranwala">Gujranwala</option>
                                    <option value="Rawalpindi">Rawalpindi</option>
                                    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                    <option value="Peshawar">Peshawar</option>
                                    <option value="Malakand">Malakand</option>
                                    <option value="Swat">Swat</option>
                                    <option value="Bannu">Bannu</option>
                                    <option value="Abbotabad">Abbotabad</option>
                                    <option value="Mardan">Mardan</option>
                                    <option value="Azad Kashmir">Azad kashmir</option>
                                    <option value="Balochistan">Balochistan</option>
                                    <option value="Karachi">Karachi</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                    <option value="Sukkur">Sukkur</option>
                                    <option value="Mirpurkhas">Mirpur Khas</option>
                                    <option value="Agha Khan University">Agha Khan University Board</option>
                                    <option value="A-Level">A-level</option>
                                    <option value="other foreign certification">other foreign certification</option>
                                    <option value="other local board">other local board</option>
                                </select>-->
                            </div>
                        </div><br /><br />
                        <div class="form-group">
                            <br /> <br />
                            <label for="inputPassword3" class="col-sm-2 control-label" style="background-color:#F0F0F0; padding: 6px 12px;">Intermediate Marks</label>
                            <div class="col-sm-10">

                                <select name="year_inter2" id="year_inter2" style="width:175px; display: inline !important;" class="form-control " required>
                                    <option value=''>Year Inter- Part II</option><?php
                                    for ($i = 2017; $i >= 2002; $i--)
                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                    ?>
                                </select>
                                <input type="text" class="form-cont" id="rollno_inter2" name="rollno_inter2" placeholder="Roll No" onKeyPress="Numeric('error_rollno_inter2');" required>
                                <div id="error_rollno_inter2" style="color:red; display:none;"> * Enter valid roll no *</div>
								
								<input type="text" class="form-cont" id="marks_inter2" maxlength="4" name="marks_inter2" placeholder="Marks Obtained(Optional)" onKeyPress="Numeric('error_marks_inter2');" >
                                <div id="error_marks_inter2" style="color:red; display:none;"> * Enter valid marks *</div>

                                <input type="text" class="form-cont" id="total_inter2" maxlength="4" name="total_inter2" placeholder="Total Marks (Optional)" onKeyPress="Numeric('error_total_inter2');" >
                                <div id="error_total_inter2" style="color:red; display:none;"> * Enter valid total marks *</div>

                                <select name ="major_inter2" id="major_inter2" class="form-control" style="width: 175px; display: inline;"  required>
                                    <option value="">Subject Combination</option>
                                    <option value="F.Sc. Pre Engineering">F.Sc. Pre Engineering</option>
                                    <option value="F.Sc. Pre Medical with Additional Math.">F.Sc. Pre Medical with Additional Math.</option>
                                    <option value="Mathematics- Computer Science- Physics">Mathematics, Computer Science, Physics</option>
                                    <option value="Mathematics- Computer Science- Statistics">Mathematics, Computer Science, Statistics</option>
                                    <option value="Mathematics- Statistics- Physics">Mathematics, Statistics, Physics</option>
                                    <option value="A-Level or Equivalent with Math.">A-Level or Equivalent with Math.</option>
                                    <option value="Mathematics- Statistics- Economics">Mathematics, Statistics, Economics</option>
                                    <option value="Mathematics- Computer Science- Economics">Mathematics, Computer Science, Economics</option>
                                    <option value="Equivalence Certification from IBCC"> A-Level/Equivalence Certification from IBCC</option>
                                    </select>
									                               
                                <select name ="board_inter2" id ="board_inter2" class="form-control" style="width: 175px; display: inline;"   required>
                                    <option value="">Intermediate Board</option>
                                    <option value="Lahore">Lahore</option>
                                    <option value="Faisalabad">Faisalabad</option>
                                    <option value="Federal">Federal</option>
                                    <option value="Multan">Multan</option>
                                    <option value="Sargodha">Sargodha</option>
                                    <option value="Sahiwal">Sahiwal</option>
                                    <option value="Bahawalpur">Bahawalpur</option>
                                    <option value="Gujranwala">Gujranwala</option>
                                    <option value="Rawalpindi">Rawalpindi</option>
                                    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                    <option value="Peshawar">Peshawar</option>
                                    <option value="Malakand">Malakand</option>
                                    <option value="Swat">Swat</option>
                                    <option value="Bannu">Bannu</option>
                                    <option value="Abbotabad">Abbotabad</option>
                                    <option value="Mardan">Mardan</option>
                                    <option value="Azad Kashmir">Azad kashmir</option>
                                    <option value="Balochistan">Balochistan</option>
                                    <option value="Karachi">Karachi</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                    <option value="Sukkur">Sukkur</option>
                                    <option value="Mirpurkhas">Mirpur Khas</option>
                                    <option value="Agha Khan University">Agha Khan University Board</option>
                                    <option value="A-Level">A-level</option>
                                    <option value="other foreign certification">other foreign certification</option>
                                    <option value="other local board">other local board</option>
                                </select>
                                <br> 
								</div>
                        </div><br />


                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <br /> <br />
                                <input type="submit" id="save_acadamic_data" style="background-color:#48CFAD; color:white;" class="btn btn-default btn-block" value="Submit Form" >
                            </div>
                        </div>
                    </form>
                </div><!-- /.bs-example  -->


            </div>
            <!--container end-->
        </div>
        <br><br>


    </body>
</html>