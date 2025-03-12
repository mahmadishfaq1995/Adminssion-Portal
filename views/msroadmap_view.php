<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
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
            font-size:20px;
            margin-bottom: 0px;
            width: 12%;
            border-radius: 4px;
            padding: 5px 5px 5px 10px;
            background-color: #ffffff;
        }
        th{
            background-color: #787878;
            color:white;
        }
    </style>
    <body>

        <div class="breadcrumbs" style="margin-bottom:0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <h1>Road Map</h1>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li> <a href="#ms_map">MS-CS</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <style>
            html, body {
                height: 100% !important;
            }
            .left, .right {
                float:left;
                height:140%;
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

        <!-- MS Section -->

        <fieldset  style="border: 0px solid  !important;" id="ms_map">
            <legend style="font-size:30px; width:35% !important;">MS Computer science</legend>
            <fieldset  >
                <legend>Year 1</legend>
                <table class="table table-bordered">
                    <thead> <tr>
                            <th>Sr. No</th>
                            <th>Course Title</th>
                            <th>Course Code</th>
                            <th>Credit Hour</th>
                            <th>Semester</th>

                        </tr>
                    </thead>
                    <tbody>
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
                    </tbody>

                </table>
                <span class="pull-right"><b>Total Credit Hours: 27</b></span>
            </fieldset>
            <fieldset  >
                <legend>Year 2</legend>
                <table class="table table-bordered">
                    <thead> <tr>
                            <th>Sr. No</th>
                            <th>Course Title</th>
                            <th>Course Code</th>
                            <th>Credit Hour</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Thesis</td>
                            <td>CS-7499</td>
                            <td>12</td>
                        </tr>
                    </tbody>

                </table>
                <span class="pull-right"><b>Total Credit Hours: 12</b></span>
            </fieldset>
        </fieldset>
    </body>
</html>