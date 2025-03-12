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
                        <h1>Societies</h1>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Home</a></li>
                            <li class="active">Society</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <style>
            html, body {
                height: 130% !important;
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
            <legend style="font-size:35px; width:35% !important; font-family: Square721 Cn BT;">Student Societies</legend>
            <div class="container"> <p style="font-size:16px; padding:10px;">Co-Curricular societies are important part of the Department. They play a significant role in grooming students. Student chapters and branch, associated with different research embryonic, organizations such as ACM and IEEE, help students support themselves to latest research vicinities of their interest, through digital libraries, forums and publications. The Department of Computer Science provides funds to three societies that focus on arranging curricular and co-curricular activities. These societies are exclusively controlled by the Department with the help of its students. The Societies work in harmony to arrange different activities throughout semesters.</p>
                <fieldset >
                    <legend>Computer Science Society</legend>
                    <div class="">
                        <p style="font-size:16px; padding:10px;">

                            The Computer Science Society of GC University is actively playing its role for the establishing and betterment of students. It is providing full opportunities to its students by conducting market oriented seminars, on campus hiring by companies and conducting valuable trainings. The society had arranged a number of events within University and had participated in many competitions, seminars, etc outside the University. In last year computer science society has organized lectures from different leading software houses such as Xavor, Strategic Software International, Arbisoft to make student aware with market trends, more over different healthy activities was organized for students like programming competitions, gaming competitions and annual dinner. This increases student’s confidence by allowing them to participate in in-house and outside competitions.
                        </p>
                    </div>
                </fieldset>
                <fieldset >
                    <legend>ACM Society</legend>
                    <div class="">
                        <p style="font-size:16px; padding:10px;">
                            GCU-ACM Student Chapter is actively working in collaboration with ACM USA, to promote the awareness of IT among students. Chapter has organized many activities like Industry Visits, Programming Competitions, Seminars, and Mentorship for students. The chapter has provided a platform for those students who want to enhance their knowledge and skill in different areas.</p>
                    </div>
                </fieldset>
                <fieldset >
                    <legend>IEEE Society</legend>
                    <div class="">
                        <p style="font-size:16px; padding:10px;">
                            The IEEE GCU Student Branch Lahore’s current body was formulated in November 2008. It currently holds Seven Office Bearers and 9 Section Representatives. This student branch has been very active and is desired by Lahore Section to remain for next academic year. It has not only participated in a variety of events but also organized them like Project Exhibition, Networking and Programming Quiz Competition and IEEE Members training workshop.  </p>
                    </div>
                </fieldset>
            </div>
        </fieldset>

    </body>
</html>