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
                        <h1>Fee Structure</h1>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Home</a></li>
                            <li class="active">Fee Structure</li>
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
        <!--breadcrumbs end-->

        <fieldset style="border: 0px solid  !important;" >
            <legend style="font-size:35px; width:35% !important; font-family: Square721 Cn BT;">Fee Package for BS(CS)</legend>
            <div class="container">
                <p style="font-size:16px; padding:10px;">
                    (The Following Fee structure was for Year 2016.
                    Fee structure for year 2017 will be announced with a small increase in July 2017)
                </p>
                <fieldset >
                    <legend> BS(CS) Morning Batch</legend>
                    <div class="">
                        <p style="font-size:18px; padding:5px;">
                            <span class="fa fa-angle-right fa-1x"></span> Admission Fee( First Time ): Rs. 20,000/- <br>
                            <span class="fa fa-angle-right fa-1x"></span> Semester Fee: Rs. 49,000/- Per Semester <br>
                            <span class="fa fa-angle-right fa-1x"></span>  Total Fee Payable at the time of Admission: Rs. 69,000/- <br>
                            <span class="fa fa-angle-right fa-1x"></span> Total Fee Payable in 4 years (8 semesters): Rs. 412,000/- <br>
                        </p>
                    </div>
                </fieldset>
                <fieldset >
                    <legend>BS(CS) Evening Batch</legend>
                    <div class="">
                        <p style="font-size:18px; padding:5px;">
                            <span class="fa fa-angle-right fa-1x"></span> Admission Fee( First Time ): Rs. 22,000/- <br>
                            <span class="fa fa-angle-right fa-1x"></span> Semester Fee: Rs. 53,000/- Per Semester <br>
                            <span class="fa fa-angle-right fa-1x"></span> Total Fee Payable at the time of Admission: Rs. 75,000/- <br>
                            <span class="fa fa-angle-right fa-1x"></span> Total Fee Payable in 4 years (8 semesters): Rs. 446,000/- <br>
                        </p>
                    </div>
                </fieldset>

            </div>
        </fieldset>

    </body>
</html>