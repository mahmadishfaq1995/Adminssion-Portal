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
                        <h1>Login</h1>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li><a href="<?php base_url('Home'); ?>">Home</a></li>
                            <li class="active">Login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs end-->

        <!--container start-->
        <div class="login-bg">
            <div class="container">
                <div class="col-md-4"></div>
                <div class="form-wrapper col-md-4">
                    <form class="form-signin wow fadeInUp"  method='POST'>
                        <h2 class="form-signin-heading">sign in now</h2>
                        <div class="login-wrap">
                            <input type="text" class="form-control" name="username" id="username" placeholder="User ID" onKeyPress="AlphaNumeric('error_username');" autofocus required>
                            <div id="error_username" style="color:red; display:none;"> * Enter a valid Username *</div>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" onKeyPress="AlphaNumeric('error_password');"  required>
                            <div id="error_password" style="color:red; display:none;"> * Enter a valid Password *</div>
                            <label class="checkbox">
                                <input type="checkbox" value="remember-me"> Remember me
                                <span class="pull-right">
                                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                                </span>
                            </label>
                            <button class="btn btn-lg btn-login btn-block" id="login_btn" type="button">Sign in</button>
                            <p>Don't have an account yet?</p>
                            <div class="">
                                <a href="<?php echo base_url('Registration'); ?>" >  <button class="btn btn-lg btn-info btn-block"  type="button">SIGN UP</button> </a
                            </div>
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
                    <p >Enter your e-mail address below to reset your password.</p>
                    <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                    <button class="btn btn-success" id="btn_suc" type="button" >Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->




</body>
</html>