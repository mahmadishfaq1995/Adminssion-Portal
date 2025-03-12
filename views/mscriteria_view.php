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
                height:175% !important;
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


        <fieldset style="border: 0px solid  !important;" >
            <legend style="font-size:35px; width:35% !important; font-family: Square721 Cn BT;">Admission Criteria</legend>
            <div class="container">
                <p style="font-size:16px; padding:10px;">
                    Different Eligibility Criteria for  MS Computer Science.
                </p>

                <fieldset id="mcseligible">
                    <legend>MS-CS Eligibility Criteria</legend>
                    <div class="">
                        <p style="font-size:16px; padding:10px;">
                            <span class="fa fa-check-square-o"></span>The minimum required marks/grades for admission in MS ( Computer Science) will be as follows; <br>
                        <ol>
                            <li>	2.5/4.00 CGPA or 60% in an Annual System.</li>
                            <li>	All candidates are required to pass the GCU Graduate Assessment Test ( general) for MS/MPHil Admission to be conducted through NTS.</li>
                            <li>     The schedule of registration and test shall be announced at appropriate time. </li>
                            <li>	a. BS (CS) 4-Year Degree Programme.
                                OR
                                b. Computer Science Conversion Course i.e. 2-Year Degree Programme refered to as MCS or MSc (CS).
                                OR
                                c. 16-year graduates having any of the following degree as eligible with the condition that they will cover deficiency courses.</li>
                            <ul>
                                <li> Software Engineering </li>
                                <li> Information Technology </li>
                                <li>Telecommunication </li>
                                <li>Computational Physics </li>
                                <li>Electrical Engineering </li>
                                <li>Computer Engineering </li>
                                <li> Electronics </li>
                                <li> Bioinformatics </li>
                            </ul> <br>
                        </ol>
                        <span class="fa fa-check-square-o"></span> Result Awaiting students can apply but they should submit their result before interview call, (normally in September). <br>
                        <span class="fa fa-check-square-o"></span> Credit Hours: In order to seek admission in MS in Computer Science, the applicants must have degrees with the following number of Credit Hours. <br>
                        <br> <ol>
                            <li>	In case of BS(Hons) 4-years degree: 130 Credit Hours</li>
                            <li>	In case of two years masters degree (after 14 years of education) 70 Credit Hours.</li>
                        </ol>
                        <span class="fa fa-check-square-o"></span>Deficiency Courses  <br>
                        <span class="fa fa-check-square-o"></span>The students who get admission in MS Computer Science and have any one of the degree other than BS/MSc Computer Science, will have to qualify Deficiency courses before regular enrollment in MS Computer Science;  <br>
                        <span class="fa fa-check-square-o"></span>List of Deficiency Courses <br>
                        <ol>
                            <li>	Programming Fundamentals. </li>
                            <li>	Operating Systems.</li>
                            <li>	Software Engineering.</li>
                            <li>	Theory of Automata.</li>
                            <li>	Design and Analysis of Algorithms.</li>
                            <li>	Computer Architecture and Organization.</li>
                            <li>	Database management Systems.</li>
                            <li>	Data Communication and Computer Networks.</li>
                        </ol>
                        </p>
                    </div>
                </fieldset>

            </div>
        </fieldset>

    </body>
</html>