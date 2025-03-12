<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <body>
        <!--breadcrumbs start-->
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <h1 style="color:white;">BS (Hons) in Computer Science</h1>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <ol class="breadcrumb pull-right">
                            <li><a href="<?php echo base_url('Home'); ?>">Home</a></li>
                            <li class="active">BS Admission</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs end-->

        <!--container start-->
        <div class="login-bg" style="background:white;">
            <style>
                html, body {
                    height:130% !important;
                }
                .left, .right {
                    float:left;
                    height:100%;
                }

                .left {
                    background: white;
                    color:black;
                    white-space: nowrap;
                    width: 50px;
                    transition: width 0.5s ;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
                }


                .left:hover {
                    width: 250px;
                }

                .item:hover {
                    background-color:#34495E;
                    color:white;
                }

                .left .glyphicon {
                    margin:15px;
                    width:20px;
                    color:#fff;
                }

                .right .glyphicon {
                    color:#a9a9a9;
                }
                span.glyphicon.glyphicon-refresh{
                    font-size:17px;
                    vertical-align: middle !important;
                }

                .item {
                    height:50px;
                    overflow:hidden;
                    color:#34495E;
                    padding: 10px;
                    font-size: 14px;
                }
                .title {
                    background-color:#eee;
                    border-style:solid;
                    border-color:#ccc;
                    border-width:1px;
                    box-sizing: border-box;
                }
                input[type=search]:focus {
                    outline:none;
                }
                .type{
                    height: 47px;;
                }
                .date{
                    background-color:#f7f7f7
                }
                .distr {
                    margin: 0 0 5px;
                    font-size: 12px;
                }
                .ndoc {
                    margin: 0 0 5px;
                }
                .storage {
                    margin: 0;
                    color: #aaa !important;
                    font-size: 12px;
                }

                .activate{
                    background-color:#34495E;
                    color:white;
                }
                .alert-info-alt { border-color: #34495E;background: white;color: #34495E; margin-top:60px;}
                .glyphicon { margin-right:10px; }
                .alert a {color: gold;}
                #heading_main{
                    color: #475168;
                    font-size: 24px;
                    text-transform: uppercase;
                    font-weight: 400;
                    margin-bottom: 30px;
                    font-family: 'Lato', sans-serif;
                }
            </style>
            <?php $this->load->view("bsslide_view"); ?>


            <div class="container">


                <div class="col-md-7" style="background:white;">
                    <div class="">
                        <h1 id="heading_main">
                            Schedule for Admissions <br><hr> BS (Hons) Computer Science
                        </h1>

                        <div class="">
                            <table class="table table-responsive table-bordered" style=' '>
                                <thead> <tr>
                                        <th style="width: 50px">#</th>
                                        <th>Activity</th>
                                        <th>Date</th>
                                        <th>Day</th>
                                    </tr>
                                </thead>
                                <tbody id="bs_body">

                                    <tr>
                                        <td>1</td>
                                        <td>First Day of Online form Submission </td>
                                        <td>17-07-2017</td>
                                        <td>Thursday</td>
                                    </tr>
                                <td>2</td>
                                <td>Last Date of Fee Submission</td>
                                <td>18-08-2017</td>
                                <td>Thursday</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Entry Test </td>
                                    <td>20-08-2017</td>
                                    <td>Sunday</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Display of Entry test Result </td>
                                    <td>08-09-2017</td>
                                    <td>Friday</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Interview /  Document Checking</td>
                                    <td colspan="2">Ten Days After the Announcement of Intermediate Result</td>

                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>First Merit List</td>
                                    <td colspan="2">within 14 After the Announcement of Intermediate Result</td>

                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Next Merit Lists</td>
                                    <td colspan="2">in subsequent days, depending upon vacant seats.</td>

                                </tr>


                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

                <div class="form-wrapper col-md-4">

                    <form class="form-signin wow fadeInUp"  method='POST'>
                       BSCS Registration has been completed. 
					   
					   Registered Candidates can login to complete their profile and get entry test result.
                       <!-- <a href="<?php echo base_url('Registration'); ?>" >  <button class="btn btn-lg btn-info btn-block"  type="button">New Registration for Admission</button> </a><br>-->
                        <h2 class="form-signin-heading">Sign In to get Test Result</h2>
                        <div class="login-wrap">
						Please Enter username:
                            <!--<input type="text" class="form-control" name="username" id="username" placeholder="User name" onKeyPress="username_field('error_username');" autofocus required>-->
                            <input type="text" class="form-control" name="username" id="username" placeholder="User name;" autofocus required>
                            
							<div id="error_username" style="color:red; display:none;"> * Enter a valid Username *</div>
                            Password:
							<input type="password" class="form-control" name="password" id="password" placeholder="Password"  required>
                            <div id="error_password" style="color:red; display:none;"> * Enter a valid Password *</div>
                            email to csadmissions@gcu.edu.pk in case of any problem in sign in, with your CNIC
							<label class="checkbox">
                                <input type="checkbox" value="remember-me"> Remember me
                                <span class="pull-right">
                                    <a data-toggle="modal" href="#myModal1">Click here if you do not remember password...</a>

                                </span>
                            </label>
                            <button class="btn btn-lg btn-login btn-block" id="login_btn" type="button">Sign in</button>
                            <p>Don't have an account yet? </p>

                            <div class="registration">
                                <br>
                                click here to begin...
                                <a class="" href="<?php echo base_url('Registration'); ?>">
                                    Create an account
                                </a>
                            </div>

                        </div>


                    </form>
                </div>


            </div>
        </div>
    </div>
    <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModal" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" id="m_head">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Forgot Password ?</h4>
                </div>
               
			   <div class="modal-body" id="m_body">
                    <p >Enter your e-mail and CNIC address below to reset your password.</p>
                    <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
 <input type="text" name="cnic" placeholder="CNIC" autocomplete="off" class="form-control placeholder-no-fix" required>

                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                    <button class="btn btn-success"  type="submit" >Submit</button>
                </div>
            </div>
        </div>
    </div>
	
    <!-- modal -->
  <div aria-hidden="true" aria-labelledby="myModal1" role="dialog" tabindex="-1" id="myModal1" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" id="">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Forgot Password ?</h4>
                </div>
               <form method="POST" action="swift/mail.php">
			   <div class="modal-body" id="">
                    <p >Enter your e-mail and CNIC address below to get your password.</p>
                   Email : <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix" required>
				   CNIC  : <input type="text" name="cnic" placeholder="CNIC" maxlength="13" autocomplete="off" class="form-control placeholder-no-fix" required>

                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                    <button class="btn btn-success"  type="submit" >Submit</button>
                </div>
				</form>
            </div>
        </div>
    </div>
	 <div id="resultmodel" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Entry Test Result Alert</h4>
                    </div>
                    <div class="modal-body">
                    <h3>BSCS Entry Test Result has been Announced</h3>
						 <br> <h4><a href="<?php echo base_url('Login');?>">Login</a> to View Your Marks </h4>
							  <br>
					</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

</body>
</html>