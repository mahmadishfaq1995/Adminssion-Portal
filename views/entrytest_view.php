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
                width: 40%;
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
                        <h1>BS-CS Entry Test</h1>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Home</a></li>
                            <li class="active">Enrty Test</li>
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
        <div class="container">

            <fieldset >
                <legend><h1 style="margin-bottom:10px;  font-family: Square721 Cn BT; font-size: 40px;">
                        Entry Test Syllabus and Procedures

                    </h1></legend>
                <div class="">
                    <p style="font-size:16px; padding:10px;">
                        <span class="fa fa-check-square-o"></span>  Candidate MUST bring his/her original National Identity Card and Entry Test Slip to enter in University. If Slip is lost, please print fresh copy from website. <br>
                        <span class="fa fa-check-square-o"></span>  Entry Test will be held on Sunday 20 August 2017, in three batches.<br>

                        <span class="fa fa-check-square-o"></span>  Candidates MUST follow test schedule printed on their own slip, which may be different from others. <br>
			<span class="fa fa-check-square-o"></span>  THERE IS NO NEGATIVE MARKING.<br>
                        <span class="fa fa-check-square-o"></span>  Entry Test will comprise of 50 MCQs. Distribution will be as under.<br>
                        
                        <span class="fa fa-check-square-o"></span>  Intermediate level Mathematics with IQ Questions: 25 Questions= 50% Portion<br>
                        <span class="fa fa-check-square-o"></span>  Analytical Questions:15 Questions = 30% Portion<br>
                        <span class="fa fa-check-square-o"></span>  English Verbal Communication : 10 Questions = 20% Portion<br>
                        <span class="fa fa-check-square-o"></span>  (Paragraph Comprehension, Acronyms, Synonyms, Filling in the blanks, Word pair matching etc..)<br>
                        <span class="fa fa-check-square-o"></span>  How to prepare: Foreign SAT books published by ARCO/BARRON are the best books.<br>
                        <span class="fa fa-check-square-o"></span>  You can Search help material on Google by Searching "SAT Preparation Help" <br>
                        <!--<span class="fa fa-check-square-o"></span>  Search Google for SAT Preparation Help<br>-->
                        <span class="fa fa-check-square-o"></span> Local NAT/NTS preparation books are also available.<br>
                        <span class="fa fa-check-square-o"></span>  Math portion will be from Intermediate Mathematics text book.<br>

                        <span class="fa fa-check-square-o"></span> Duration of Entry test will be 60 minutes.<br>
                        <span class="fa fa-check-square-o"></span>  Candidates must travel such that they are able to reach University one hour before entry test, however, they will be allowed to enter in their exam room 15-20 minutes before time. <br>
                        <span class="fa fa-check-square-o"></span>  Latecomers will not be allowed.<br>
                        <span class="fa fa-check-square-o"></span>  Each candidate's seat will be fixed with his/her name printed on it.<br>
                        <span class="fa fa-check-square-o"></span>  Each candidate's test will bear his/her name already printed.<br>
                        <span class="fa fa-check-square-o"></span>  Candidate will only have to sign the Entry Test Face sheet and circle the correct answers.<br>
                        <span class="fa fa-check-square-o"></span>  Test Paper will only be given to candidate on seat.<br>
                        <span class="fa fa-check-square-o"></span>  Every candidate's test will be different from neighbours.<br>
                        <span class="fa fa-check-square-o"></span>  Mobile Phones are not allowed, and must be left outside University.<br>
                        <span class="fa fa-check-square-o"></span>   There is no need of calculator, neither it is allowed.<br>
                        <span class="fa fa-check-square-o"></span>  Sample Entry test paper with sample MCQ Facesheet is available on the website.<br>
                        <span class="fa fa-check-square-o"></span>  Entry Test will comprise of a Question Paper of FOUR or FIVE pages, blank paper for rough work and ONE FACE SHEET.<br>
                        <span class="fa fa-check-square-o"></span>  Please make sure that paging and printing of paper is correct.<br>
                        <span class="fa fa-check-square-o"></span>  <a href="files/BS(CS)_Sample_Question_Paper.pdf" >Click here for Entry Test Sample.</a> (This sample paper is from old pattern and for reference only. New pattern and weightage is at the start of this page.) <br>
                        <span class="fa fa-check-square-o"></span> <a href="files/Face_Sheet.pdf" >Sample Answer Sheet (Face Sheet)</a><br>
                    </p>
                </div>
            </fieldset>

        </div>
    </body>
</html>