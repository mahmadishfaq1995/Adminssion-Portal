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
                        <h1>Eligibility for Admission in BS Computer Science</h1>
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

        <?php $this->load->view("bsslide_view"); ?>
        <!--breadcrumbs end-->

        <fieldset style="border: 0px solid  !important;" >
            <legend style="font-size:35px; width:35% !important; font-family: Square721 Cn BT;">Admission Criteria</legend>
            <div class="container">
                <p style="font-size:16px; padding:10px;">
                    
                </p>

                <fieldset id="bcsmarit">
                    <legend>BS-CS Merit Criteria</legend>
                    <div class="">
                        <p style="font-size:16px; padding:10px;">
<span class="fa fa-check-square-o"></span> Previous Year (2016) Merit:<br>
<ol>
<li>  BSCS Morning: 72.08%.</li>
<li>  BSCS Evening: 69.67% </li>
</ol><br>
<span class="fa fa-check-square-o"></span>  Minimum 50% marks will be necessary in Intermediate.<br>

<span class="fa fa-check-square-o"></span>  Admission will be based upon following merit formula, <br>
<ol>
<li> Intermediate marks: 60% weightage</li>

<li> Entry test : 40% weightage</li>
</ol> <br>


<span class="fa fa-check-square-o"></span> Aggregate Formula: (Intermediate Marks x 60/100) + (Entry Test Marks x 40/100)<br>
<span class="fa fa-check-square-o"></span> Example: Let Candidate Intermediate Marks=670 out of 1100<br>
<span class="fa fa-check-square-o"></span> let Candidate Entry Test Marks=40 out of 50<br>
<span class="fa fa-check-square-o"></span> Shortcut method for Merit calculation.<br>
<span class="fa fa-check-square-o"></span> Aggregate Formula: (Intermediate Marks x 3/55) + (Entry Test Marks x 0.8)<br>
<span class="fa fa-check-square-o"></span> Candidate Aggregate: (670 x 3/55) + (40 x 0.8) = 68.545454545455 <br>
<span style="color:red">(Note: You will see an approximation on the basis of marks entered by yourself.</span><br>
<span class="fa fa-check-square-o"></span> Correct aggregate will be calculated after result verification from Board)<br>
                                                   </p>
                    </div>
                </fieldset>


            </div>
        </fieldset>

    </body>
</html>