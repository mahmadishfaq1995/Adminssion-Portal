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
                            <li class="active"><a href="#bs_map">BS-CS</a></li>
                          
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <style>
            html, body {
                height: 200% !important;
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


        <fieldset  style="border: 0px solid  !important;" id="bs_map">
            <legend style="font-size:30px; width:35% !important;">BS Computer science</legend>
            <fieldset  >
                <legend>Semester 1</legend>
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
                            <td>Introduction to Computing</td>
                            <td>CS-1101</td>
                            <td>3 (2+1)</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Electronics</td>
                            <td>CS-1103</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Calculus and Analytical Geometry</td>
                            <td>CS MATH-2201</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>English Composition and Comprehension</td>
                            <td>CS ENG-1101</td>
                            <td>3 </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Islamic Studies and Pakistan Studies</td>
                            <td>CS ISL Pk -2101</td>
                            <td>3</td>
                        </tr>
                    </tbody>

                </table>
                <span class="pull-right"><b>Total Credit Hours: 15</b></span>
            </fieldset>
            <fieldset  >
                <legend>Semester 2</legend>
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
                            <td>Programing Fundamentals</td>
                            <td>CS-1225</td>
                            <td>4 (3+1)</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Digital Logic Design</td>
                            <td>CS-2033</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Linear Algebra</td>
                            <td>CS MATH-2101</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Communication Skills</td>
                            <td>CS ENG-1201</td>
                            <td>3 </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Probabailty and Statistics</td>
                            <td>CS STAT -1101</td>
                            <td>3</td>
                        </tr>
                    </tbody>

                </table>
                <span class="pull-right"><b>Total Credit Hours: 16</b></span>
            </fieldset>
            <fieldset  >
                <legend>Semester 3</legend>
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
                            <td>Object Oriented Programming</td>
                            <td>CS-1201</td>
                            <td>4 (3+1)</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Discrete Structures</td>
                            <td>CS-1203</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Financial Accounting</td>
                            <td>CS-1207</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Multivariate Calculus</td>
                            <td>CS MATH-3101</td>
                            <td>3 </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Cognitive Psychology</td>
                            <td>CS-2107</td>
                            <td>3</td>
                        </tr>
                    </tbody>

                </table>
                <span class="pull-right"><b>Total Credit Hours: 16</b></span>
            </fieldset>
            <fieldset  >
                <legend>Semester 4</legend>
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
                            <td>Data Structures and Algorithms</td>
                            <td>CS-2101</td>
                            <td>4 (3+1)</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Microprocessor and Assembly Language</td>
                            <td>CS-2207</td>
                            <td>4 (3+1)</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Visual Programming</td>
                            <td>CS-2201</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Logical paradigms in Computing</td>
                            <td>CS-2208</td>
                            <td>3 </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Differential Equations</td>
                            <td>CS MATH -3201</td>
                            <td>3</td>
                        </tr>
                    </tbody>

                </table>
                <span class="pull-right"><b>Total Credit Hours: 15</b></span>
            </fieldset>
            <fieldset  >
                <legend>Semester 5</legend>
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
                            <td>Database Systems</td>
                            <td>CS-2014</td>
                            <td>3 (2+1)</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Design and Analysis of Algorithms</td>
                            <td>CS-3108</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Data Communication and Networks</td>
                            <td>CS-3106</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Theory of Automata</td>
                            <td>CS– 2044</td>
                            <td>3 </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Operation Research</td>
                            <td>CS-3109</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Professional Practices</td>
                            <td>HM – 3123</td>
                            <td>3</td>
                        </tr>
                    </tbody>

                </table>
                <span class="pull-right"><b>Total Credit Hours: 19</b></span>
            </fieldset>
            <fieldset  >
                <legend>Semester 6</legend>
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
                            <td>Operating Systems</td>
                            <td>CS-2205</td>
                            <td>3 (2+1)</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Software Engineering</td>
                            <td>CS-2105</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Artifical Intelligence and Neural Networks</td>
                            <td>CS-3102</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Compiler Construction</td>
                            <td>CS-4202</td>
                            <td>3 </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Foreign Language (French)</td>
                            <td>CS-4105</td>
                            <td>3</td>
                        </tr>
                    </tbody>

                </table>
                <span class="pull-right"><b>Total Credit Hours: 16</b></span>
            </fieldset>
            <fieldset  >
                <legend>Semester 7</legend>
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
                            <td>Object Oriented Analysis and Design</td>
                            <td>CS-4108</td>
                            <td>3 </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Human Computer Interaction</td>
                            <td>CS-4122</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Computer Architecture</td>
                            <td>CS-2063</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Computer Science Elective-I</td>
                            <td>NA</td>
                            <td>3 </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Computer Science Elective-II</td>
                            <td>NA</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Project</td>
                            <td>NA</td>
                            <td>3</td>
                        </tr>
                    </tbody>

                </table>
                <span class="pull-right"><b>Total Credit Hours: 18</b></span>
            </fieldset>
            <fieldset  >
                <legend>Semester 8</legend>
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
                            <td>Information Security</td>
                            <td>CS – 4215</td>
                            <td>3 </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Numerical Computing</td>
                            <td>CS-4216</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Intellectual Property Rights and Cyber Law</td>
                            <td>CS-4217</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Computer Science Elective-III</td>
                            <td>NA</td>
                            <td>3 </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Computer Science Elective-IV</td>
                            <td>NA</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Project</td>
                            <td>NA</td>
                            <td>3</td>
                        </tr>
                    </tbody>

                </table>
                <span class="pull-right"><b>Total Credit Hours: 18</b></span>
            </fieldset>
        </fieldset>



    </body>
</html>