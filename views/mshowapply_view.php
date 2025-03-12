<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

    <body>
        <style>
            fieldset
            {
                border: 4px solid #A8A8A8 !important;
                margin: 20px;
                xmin-width: 0;
                padding: 20px;
                position: relative;
                border-radius:4px;
                padding-left:10px!important;
            }


            legend
            {
                font-size:24px;
                margin-bottom: 0px;
                font-family: Square721 Cn BT;
                width: 25%;
                border-radius: 4px;
                padding: 5px 5px 5px 10px;
                background-color: #ffffff;
            }
            th{
                background-color: #787878;
                color:white;
            }
        </style>

        <!--breadcrumbs start-->
        <div class="breadcrumbs" style="margin-bottom:0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <h1>How to Apply?</h1>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Home</a></li>
                            <li class="active">How to Apply?</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <style>
            html, body {
                height:124% !important;
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




        </style>

        <?php $this->load->view("msslide_view"); ?>
        <!--breadcrumbs end-->

        <fieldset style="border: 0px solid  !important;" >
            <legend style="font-size:35px; width:35% !important; font-family: Square721 Cn BT;">How to Apply?</legend>
            <div class="container">
                <p style="font-size:16px; padding:10px;">
                    Guidelines for how to apply for admission in GCU Lahore.
                </p>
                <fieldset >
                    <legend>BS-CS Admission Application</legend>
                    <div class="">
                        <p style="font-size:16px; padding:10px;">
                            <span class="fa fa-check-square-o"></span> Register at <a href="<?php echo base_url('registration'); ?>">http://csadmissions.gcu.edu.pk/registration</a><br>

                            <span class="fa fa-check-square-o"></span> Login your Account at <a href="<?php echo base_url('Login'); ?>">http://csadmissions.gcu.edu.pk/Login</a><br>

                            <span class="fa fa-check-square-o"></span> First Section of form is to enter Personal information and click process information button.<br>
                            <span class="fa fa-check-square-o"></span> Second Section of form is to enter Academic information and click submit button. <br>
                            <span class="fa fa-check-square-o"></span> Enter all required information correctly wrong information will not be considered.<br>

                            <span class="fa fa-check-square-o"></span> Enter your mobile number in correct format (03001234567), and email (in abc@def.xyz format).<br>

                            <span class="fa fa-check-square-o"></span> Print online fee chalan.<br>
                            <span class="fa fa-check-square-o"></span> Submit Picture or Scan copy of submitted challan form.<br>

                            <span class="fa fa-check-square-o"></span> Submit in nearest Habib Bank branch, and keep receipt with you. DO NOT MAIL SCAN COPY.<br>

                            <span class="fa fa-check-square-o"></span> Prepare for Entry Test, from syllabus given in entry test section of website.<br>

                            <span class="fa fa-check-square-o"></span> Appear in Entry Test according to schedule given on your Slip.<br>

                            <span class="fa fa-check-square-o"></span> If Entry test is qualified with 40% or more marks, wait for Intermediate result.                            <span class="fa fa-check-square-o"></span> If Entry test is qualified with 40% or more marks, wait for Intermediate result.<br>


                            <span class="fa fa-check-square-o"></span> If you get 50% or more marks in Intermediate, enter your result online on BSCS registration Page<br>

                            <span class="fa fa-check-square-o"></span> If your merit aggregate lies in topmost candidates, you will be called for original document verification.<br>

                            <span class="fa fa-check-square-o"></span> Upon verification, your name will be included in Merit List.<br>

                            <span class="fa fa-check-square-o"></span> You get Admission fee chalan, deposit in Bank and start attending classes. <br>
                        </p>
                    </div>
                </fieldset>
                <fieldset id="docs">
                    <legend>Documents Required for Registration</legend>
                    <div class="">
                        <p style="font-size:16px; padding:10px;">
                            <span class="fa fa-check-square-o"></span> Please check following documents /information before starting Online registration.<br>

                            <span class="fa fa-check-square-o"></span> These documents are not to be submitted but should be ready.<br>
                            <span class="fa fa-check-square-o"></span> Your email and mobile number. (at least one contact is compulsory).<br>

                            <span class="fa fa-check-square-o"></span> Your National ID card or Nadra B-Form. (Those candidates not having NIC or B-Form, must email to csadmissions.gcu.edu.pk for temporary Entry test Slip)<br>

                            <span class="fa fa-check-square-o"></span> Your father/guardian's National ID Card.<br>

                            <span class="fa fa-check-square-o"></span> You Matriculation Result card (for correct name spelling and Date of Birth).<br>

                            <span class="fa fa-check-square-o"></span> Copy of your 2nd Year Roll number slip(2016) or Intermediiate Pass result card.<br>

                            <span class="fa fa-check-square-o"></span> One scanned copy of your Photo for uploading. (less than 1 Megabyte).<br>

                            <span class="fa fa-check-square-o"></span> (Do not send these documents to any address. We do not need them now).<br>
                        </p>
                    </div>
                </fieldset>

            </div>
        </fieldset>

    </body>
</html>