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
                        <h1>Reserved Seats</h1>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Home</a></li>
                            <li class="active">Reserved Seats</li>
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
                <legend><h1 style="margin-bottom:10px; font-family: Square721 Cn BT; font-size: 40px;">
                        Reserved Seats
                    </h1></legend>
                <div class="">
                    <p style="font-size:16px; padding:10px;">
                        <span class="fa fa-check-square-o"></span>  A small number of Seats is reserved according to GCU rules.<br>
                        <span class="fa fa-check-square-o"></span>  Admission against each seat will be according to merit distribution for that category.<br>

                        <span class="fa fa-check-square-o"></span>  Hifz e Quraan:
                    <ol>
                        <li>  No separate seat is allocated.</li>

                        <li>  Hafiz e Quraan will be asked to submit Hifz Certificate in Admission Cell </li>

                        <li>  A panel will take verbal examination of candidate and will decide whether the candidate qualifies or not.</li>

                        <li>  A candidate who passed Hifz e Quraan Exam, will be given extra 20 marks out of 1100, added into Intermediate Marks Weightage.</li>
                    </ol>
                    <span class="fa fa-check-square-o"></span>  Children of Overseas Pakistani Parents.
                    <ol>
                        <li>  Approximately one seat per 45 students.</li>

                        <li> Candidate's real parent/legal guardian should be employed/resident in a foreign country in previous two years (2014-16)</li>

                        <li>  Any Pakistani, having Pakistani Origin, Domicile, Pakistani CNIC, or NADRA overseas NIC card can be considered as overseas Pakistani.</li>

                        <li>  A valid passport, Work visa, A valida Aqama, Work permit and/or relevant document are required as a proof.</li>

                        <li>  All documents must be attested by the relevant embassy or other foreign department's attesting service.</li>

                        <li>  Candidate, along with his/her parent will be called for interview and document checking.</li>

                        <li>  Separate Merit list will be prepared for such candidates and admission will be purely on the order of merit.</li>

                        <li>  Candidates seeking admission on overseas basis will have to pay extra fees at the time of admission.</li>
                    </ol>
                    <span class="fa fa-check-square-o"></span>  GC University Lahore's staff son/daughter;
                    <ol>
                        <li>  Approximately one seat per 45 students.</li>

                        <li>  Candidate, along with his/her parent will be called for interview.</li>

                        <li>  Separate Merit list will be prepared for such candidates and admission will be purely on the order of merit.</li>
                    </ol>
                    <span class="fa fa-check-square-o"></span> Disabled Students;
                    <ol>
                        <li>  Approximately one seat per 45 students.</li>

                        <li> Candidate should have a permanent disability certification from Government's relevant department.</li>

                        <li> GC University's Medical Board will examine the nature of disability and decide the Admission.</li>
                    </ol>
                    <span class="fa fa-check-square-o"></span>  Sports/co-curricular Activities.
                    <ol>
                        <li> Approximately one seat per 45 students.</li>

                        <li>    Candidate must have represented his/her previous institute at minimum Provincial or National level.</li>

                        <li>     Candidate must have won at least one position in a Provincial or National Level Competition.</li>

                        <li>   Candidate will have to appear before GC University's relevant Sports/ Co-curricular Societies Board, for verification of his/her certificates and for a trial in his/her category.</li>

                    </ol>
                    </p>
                </div>
            </fieldset>


        </div>
    </fieldset>

</body>
</html>