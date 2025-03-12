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
                        <h1>Admission Criteria</h1>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Home</a></li>
                            <li class="active">Criteria</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
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




        </style>
        <?php $this->load->view("bsslide_view"); ?>


        <fieldset style="border: 0px solid  !important;" >
            <legend style="font-size:35px; width:35% !important; font-family: Square721 Cn BT;">Admission Criteria</legend>
            <div class="container">
                <p style="font-size:16px; padding:10px;">

                </p>
                <fieldset >
                    <legend>BS-CS Eligibility Criteria</legend>
                    <div class="">
                        <p style="font-size:16px; padding:10px;">
                            <span class="fa fa-check-square-o"></span> Minimum 50% Marks with following combination in Intermediate. <br>
                        <ol>
                            <li> F. Sc Pre Engineering/Pre Medical with Additional Mathematics.</li>
                            <li>
                                ICS/General Science with following combinations
                                <ol type="I">
                                    <li>Mathematics, Statistics, Physics</li>
                                    <li>Mathematics, Computer Science, Physics</li>
                                    <li>Mathematics, Computer Science, Statistics</li>
                                    <li>Mathematics, Statistics, Economics</li>
                                    <li>Mathematics, Computer Science, Economics</li>
                                </ol>
                            </li>
                            <li>A Levels Certificate same combinations as above.</li>
                            <li>Equivalence Certification from IBCC.</li>
                            <li> Other foreign qualifications are eligible only if an equivalence certificate is issued by IBCC</li>
                        </ol>

                        <span class="fa fa-check-square-o"></span> DAE or other Diploma holders are not eligible for admission in BS(CS) program in GC University Lahore.<br>

                        <span class="fa fa-check-square-o"></span> I.Com/D.Com certified candidates are not eligible.<br>

                        <span class="fa fa-check-square-o"></span> Result Awaiting students who have appeared in 2017 can apply for Entry test. <br>

                        <span class="fa fa-check-square-o"></span> Please note that Online registration, Entry Test Slip and Entry Test result declaration does not mean that a candidates eligibility has been checked and he/she qualifies for admission.<br>

                        <span class="fa fa-check-square-o"></span> Eligibility will be determined by checking original documents, before admission. Admission shall be cancelled if a candidate submits wrong information, or shows fake documents. <br>
                        </p>
                    </div>
                </fieldset>
                <fieldset id="bcsmarit">
                    <legend>BS-CS Merit Formula</legend>
                    <div class="">
                        <p style="font-size:16px; padding:10px;">
                            <span class="fa fa-check-square-o"></span> Minimum 50% marks will be required in Intermediate Result. <br>

                            <span class="fa fa-check-square-o"></span> Admission will be based upon following Merit Formula, <br>

                            <span class="fa fa-check-square-o"></span> Intermediate marks: 60% weightage <br>

                            <span class="fa fa-check-square-o"></span> Entry test : 40% weightage <br>
                            <span class="fa fa-check-square-o"></span>Previous Year Merit was approximately 69.72% in last merit list.<br>
                            <span class="fa fa-check-square-o"></span>Example: Candidate Intermediate Marks=670, and Entry Test Marks=40 <br>
                            <span class="fa fa-check-square-o"></span>Simplified Aggregate Formula: (Intermediate Marks x 3/55) + (Entry Test Marks x 0.8) <br>
                            <span class="fa fa-check-square-o"></span>Simplified Formula: Candidate Aggregate= (670 x 3/55) + (40 x 0.8) = 68.545454545455 <br>
                            <span style="color:red;">(Note: You will see an approximation on the basis of marks entered by yourself. <br>
                                Correct aggregate will be calculated after result verification from Board) </span>
                        </p>
                    </div>
                </fieldset>

            </div>
        </fieldset>

    </body>
</html>