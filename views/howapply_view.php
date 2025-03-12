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

        <?php $this->load->view("bsslide_view"); ?>
        <!--breadcrumbs end-->

        <fieldset style="border: 0px solid  !important;" >
            <legend style="font-size:35px; width:35% !important; font-family: Square721 Cn BT;">How to Apply?</legend>
            <div class="container">
                <p style="font-size:16px; padding:10px;">
                    Guidelines for applying for admission in GCU Lahore.
                </p>
                <fieldset >
                    <legend>BS-CS Admission Application</legend>
                    <div class="">
                        <p style="font-size:16px; padding:10px;">
                            <span class="fa fa-check-square-o"></span> Register at <a href="<?php echo base_url('#'); ?>">http://csadmissions.gcu.edu.pk/registration</a><br>

                            <span class="fa fa-check-square-o"></span> Login your Account at <a href="<?php echo base_url('#'); ?>">http://csadmissions.gcu.edu.pk/Login</a><br>
			    <span class="fa fa-check-square-o"></span>Please keep your CNIC/B-Form, Matric Certificate, Intermediate Certificate and Roll Number Slip for correct information, <br>
			    <span class="fa fa-check-square-o"></span>especially Your Date of Birth, Your correct name spellings, your correct CNIC, and Second year roll number, board and subject combination<br>

			    <span class="fa fa-check-square-o"></span>Above mentioned information will not be changed/corrected aftyer you enter and submit<br>


                            <span class="fa fa-check-square-o"></span> First Section of form is to enter Personal information. On completion, click process information button.<br>
                            <span class="fa fa-check-square-o"></span> Second Section of form is to enter Academic information. On completion click submit button. <br>
                            
                            <span class="fa fa-check-square-o"></span> Enter your mobile number in correct format (03001234567), and email (in abc@def.xyz format).<br>

                            <span class="fa fa-check-square-o"></span> Print online fee chalan.<br>

                            <span class="fa fa-check-square-o"></span> Submit in nearest Habib Bank branch, and keep receipt with you. DO NOT MAIL OR SEND SCAN COPY.<br>

                            <span class="fa fa-check-square-o"></span> Wait for 4 to 5 working days so that fee submission is verified in GCU admission cell.<br>

                            <span class="fa fa-check-square-o"></span> You will receive e-mail/SMS regarding fee reception, or you can get Entry Test Slip from website.<br>

                            <span class="fa fa-check-square-o"></span> If you do not receive email/SMS within 5 days, and your Entry Test Slip is not on website, you will need to upload scanned copy of fee chalan on website. After verification, email/SMS will be sent.<br>

                            <span class="fa fa-check-square-o"></span> Upon receiving of SMS/email, Print Entry Test Slip from website.<br>

                            <span class="fa fa-check-square-o"></span> Prepare for Entry Test, from syllabus given in entry test section of website.<br>

                            <span class="fa fa-check-square-o"></span> Appear in Entry Test according to schedule given on your Slip.<br>

                            <span class="fa fa-check-square-o"></span> If Entry test is qualified , wait for Intermediate result.<br>

                            <span class="fa fa-check-square-o"></span> If you get 50% or more marks in Intermediate, enter your Intermediate result online on BSCS registration Page<br>

                            <span class="fa fa-check-square-o"></span> If your merit aggregate lies in topmost candidates, you will be called for original document verification.<br>

                            <span class="fa fa-check-square-o"></span> Upon verification, your name may be included in First and next Merit Lists according to vacant seats.<br>

                            <span class="fa fa-check-square-o"></span> If your name is in a merit list, You get Admission fee chalan, deposit in Bank and start attending classes.<br>
                        </p>
                    </div>
                </fieldset>


            </div>
        </fieldset>

    </body>
</html>