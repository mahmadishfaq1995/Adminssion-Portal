<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

    <body>

        <!--breadcrumbs start-->
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <h1>Registration</h1>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li><a href="<?php echo base_url('Home'); ?>">Home</a></li>
                            <li class="active">Registration</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs end-->

        <!--container start-->
        <div class="registration-bg">
            <div class="container">
                <div class="row">
<div class="col-md-4" style="margin-top:100px;">
					<h3>Note : </h3>
                 <ul style="margin-left:15px; list-style: none;">
                    <li><label class="control-label"><div class="row"><div class="col-md-2"><i class="fa fa-hand-o-right fa-2x" aria-hidden="true"></i></div> <div class="col-md-10">Create Account By giving Valid information</div></div></label></li>
                    <li><label class="control-label"><div class="row"><div class="col-md-2"><i class="fa fa-hand-o-right fa-2x" aria-hidden="true"></i></div> <div class="col-md-10" style="color:red;"> Username and Password will be used to login. Remember both fields. </div></div></label></li>
                    <li><label class="control-label"><div class="row"><div class="col-md-2"><i class="fa fa-hand-o-right fa-2x" aria-hidden="true"></i></div> <div class="col-md-10"> &nbsp; Every field of form is compulsory to fill.</div></div></label></li>
					<li><label class="control-label"><div class="row"><div class="col-md-2"><i class="fa fa-hand-o-right fa-2x" aria-hidden="true"></i></div> <div class="col-md-10" style="color:red;"> Special Characters are Not Allowed in Username and Password.</div></div></label></li>
                </ul>
                    </div>
                    <div class="col-md-4">
                        <?php
                        if ($this->session->userdata('Newacc') == 'created') {
                            echo ' <div class="alert alert-success" style="width: 119%; padding: 11px;margin-top: 30px; margin-bottom: -30px;"><strong>Success!</strong> Your Account has been created. Click to <a href="#" id="goto_login" ><b> Login Now!! <b></a></div>';
                            $this->session->sess_destroy();
                        }
                        ?>
                        <form class="form-signin wow fadeInUp" action="" method="POST" autocomplete="off">

                            <h2 class="form-signin-heading">Register now</h2>
							<h5> Please carefully read "Eligibility", "How to apply", and "Frequently Asked Questions" before applying.</h5>
							<h6> Only one candidate can register on a CNIC, email and username. If yo have already registered, please use that login</h6>
                            <div class="login-wrap">
                                <p>Enter personal details</p>
								Your name according to your Matric Certificate:
                                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name" autofocus="" onKeyPress=
                                       "Names('error_fullname');" required>
                                <div id="error_fullname" style="color:red; display:none;"> * Enter a valid Name *</div>
                                <input type="text" class="form-control" name="address" id="address" maxlength="13" placeholder="CNIC (Without Dashes)" autofocus="" onKeyPress="Numeric('error_address');" required>
                                <div id="error_address" style="color:red; display:none;"> * Enter a valid cnic *</div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" autofocus="" 
                                       required />
                                <div id="error_email" style="color:red; display:none;"> * Enter a valid Email *</div>
                                <div class="radios">
                                    <label class="label_radio col-lg-6 col-sm-6" for="radio">
                                        <input name="gender" id="gender" value="male" type="radio" required> Male
                                    </label>
                                    <label class="label_radio col-lg-6 col-sm-6" for="radio">
                                        <input name="gender" id="gender" value="female" type="radio" required> Female
                                    </label>
                                </div>
							
                                <p>Create your new account</p>
								Enter username(maximum 25 alphabets):(Pleasse note down your username and password in a safe place)
                                <input type="text" class="form-control has-error" name="username" id="username" placeholder="User Name" autofocus=""
                                       onKeyPress="username_field('error_username');" required >
                                <div id="error_username" style="color:red; display:none;"> * Enter a valid Username *</div>
                                Enter your password(maximum 25 alphabets and digits only. No space and symbols etc):
								<input type="password" class="form-control"  name="password" id="password" placeholder="Password" required>
                                
								<div id="error_password" style="color:red; display:none;"> * Enter a valid Password *</div>
                                <input type="password" class="form-control"  name="confirm_password" id="confirm_password" placeholder="Re-type Password"
                                        required>
                                <div id="error_confirm_password" style="color:red; display:none;"> * Enter a valid Password *</div>
                                <!--                   <label class="checkbox">
                                                        <input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
                                                    </label>-->
                                <input id="register_btn" class="btn btn-lg btn-login btn-block" type="submit" value="Create Now">

                                <div class="registration">
                                    Already Registered ?
                                    <a class="" href="login">
                                        Login
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--container end-->
    </body>
</html>