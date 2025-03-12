<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <body>
        <!--breadcrumbs start-->
        <div class="breadcrumbs" style="margin-bottom: 0px !important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <h1>Academics</h1>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li><a href="<?php echo base_url('Home'); ?>">Home</a></li>
                            <li class="active">Academics</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <style>
            html, body {
                height: 135% !important;
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
                width: 20%;
                border-radius: 4px;
                padding: 5px 5px 5px 10px;
                background-color: #ffffff;
            }
            th{
                background-color: #787878;
                color:white;
            }
            td{
                text-overflow: ellipsis;
                overflow: hidden;
                white-space: nowrap;
            }
        </style>
        <fieldset style="border: 0px solid  !important;" >
            <legend style="font-size:35px; width:35% !important; font-family: Square721 Cn BT;">MS Program</legend>
            <div class="container"> <p style="font-size:16px; padding:10px;">
                    <span class="fa fa-check-square-o"></span>  Master's courses are, academically demanding and we arrogance ourselves on offering relevant and timely content delivered by subject specialists. With value-added course features and the potential to complete a professional placement during the dissertation module, the courses ensure that our students meet industry, not-for-profit but public sector expectations.

                    MS (CS) Degree program is of 39 credit hours, and spread over 2 years with 2 Semesters in each year. The MS (CS) students are required to complete 5 core courses (15 credit hours) and 4 elective courses (12 credit hours), followed by a thesis to complete the MS degree. <br>
                    <span class="fa fa-check-square-o"></span>  MSCS in GCU Lahore is a full week, afternoon program. Normally classes are arranged from 4:00 to 7:00 PM. <br>
                    <span class="fa fa-check-square-o"></span> MSCS is 4-semester program. Admissions are announed in July and classes start from November every year.<br>
                    <span class="fa fa-check-square-o"></span> Admission Schedule: Admissions in MS/Mphil are announced in month of July. <br>
                    <span class="fa fa-check-square-o"></span> The admission process will be announced by GC University Lahore. <br>


                </p>
                <fieldset >
                    <legend>Courses</legend>
                    <div class="">
                        <p style="font-size:16px; padding:10px;">
                        <div class="table-responsive">
                            <table class="table table-bordered" style='table-layout:fixed'>
                                <thead> <tr>
                                        <th style="width: 50px">#</th>
                                        <th>Subject</th>
                                        <th>Course Code</th>
                                        <th>Credit Hour</th>
                                        <th>Year</th>
                                    </tr>
                                </thead>
                                <tbody id="bs_body">
                                    <tr>
                                        <td>1</td>
                                        <td>Advanced Theory of Computation</td>
                                        <td>CS-7103</td>
                                        <td>3</td>
                                        <td>I</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Advanced Computer Architecture</td>
                                        <td>CS-7301</td>
                                        <td>3</td>
                                        <td>I</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Research Methods</td>
                                        <td>CS-7215</td>
                                        <td>3</td>
                                        <td>I</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Specialization Subject I</td>
                                        <td>NA</td>
                                        <td>3 </td>
                                        <td>I</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Specialization Subject II</td>
                                        <td>NA</td>
                                        <td>3</td>
                                        <td>I</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Advanced Operating System</td>
                                        <td>CS-7202</td>
                                        <td>3</td>
                                        <td>II</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Advanced Algorithms</td>
                                        <td>CS-7202</td>
                                        <td>3</td>
                                        <td>II</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Specialization Subject III</td>
                                        <td>NA</td>
                                        <td>3</td>
                                        <td>II</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Specialization Subject IV</td>
                                        <td>NA</td>
                                        <td>3 </td>
                                        <td>II</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Thesis</td>
                                        <td>CS-7499</td>
                                        <td>12</td>
                                        <td>II</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                        </p>
                    </div>
                </fieldset>
                <fieldset >
                    <legend>Summary</legend>

                    <div style="font-size:16px; padding:10px; text-align: center !important;" class="row">
                        <div class="col-md-4">
                            <h4>Total Year: <b>2</b></h4>
                        </div>
                        <div class="col-md-4">
                            <h4>Total Subjects: <b>9 and thesis</b></h4>
                        </div>
                        <div class="col-md-4">
                            <h4>Total Credit Hours: <b>39</b></h4>
                        </div>
                    </div>
                    <br>
                    <table class="table table-bordered" style='table-layout:fixed'>
                        <thead>
                            <tr>
                                <th>Total Marks</th>
                                <th>Mid Term Marks</th>
                                <th>Sessional Marks</th>
                                <th>Final Exam Marks</th>
                            </tr>
                        </thead>
                        <tbody id="bs_body">
                            <tr>
                                <td>100</td>
                                <td>20</td>
                                <td>20</td>
                                <td>60</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <b> Note: </b> Department has right to change, withdraw, and swap any of the Elective course anytime without prior notice.
                </fieldset>
            </div>
        </fieldset>


    </body>
</html>