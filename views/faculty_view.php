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
                width: 15%;
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
                        <h1>Faculty</h1>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li><a href="<?php echo base_url('Home'); ?>" >Home</a></li>
                            <li class="active">Faculty</li>
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

        <fieldset style="border: 0px solid  !important;" >
            <legend style="font-size:35px; width:35% !important; font-family: Square721 Cn BT;">Faculty of Department</legend>

            <fieldset >
                <legend> Permanent Faculty</legend>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                         <img src="img/default.png" alt="" style="width=150px; height=150px">
                        <div class="caption">
                            <h4>
                                Dr. Asad Raza kazmi(PhD, China)
                            </h4>
                            <p>
                                Head of Department
                            </p>
                          <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">

                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                         <img src="img/default.png" alt="" style="width=150px; height=150px">
                        <div class="caption">
                            <h4 >
                                Saeed ur Rehman Turk, MS (UMT)
                            </h4>
                            <p>
                                Assistant Professor
                            </p>
                            <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">

                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                         <img src="img/default.png" alt="" style="width=150px; height=150px">
                        <div class="caption">
                            <h4>
                                Yahya Khurram, MS (GCUL, Pak)
                            </h4>
                            <p>
                                Assistant Professor
                            </p>
                           <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">

                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                         <img src="img/default.png" alt="" style="width=150px; height=150px">
                        <div class="caption">
                            <h4>
                                Dr. Fareeha Zafar, Ph.D (England)
                            </h4>
                            <p>
                                Assistant Professor
                            </p>
                           <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">

                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
				-->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                         <img src="img/default.png" alt="" style="width=150px; height=150px">
                        <div class="caption">
                            <h4>
                                Muhammad Safyan MS (NUST, Pak)
                            </h4>
                            <p>
                                Assistant Professor
                            </p>
                           <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">

                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                         <img src="img/default.png" alt="" style="width=150px; height=150px">
                        <div class="caption">
                            <h4>
                                Mohd Ilyas Fakhir, MS (UCP, Pak)
                            </h4>
                            <p>
                                Assistant Professor
                            </p>
                           <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">

                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                         <img src="img/default.png" alt="" style="width=150px; height=150px">
                        <div class="caption">
                            <h4>
                                Ayesha Atta, MS (GCUL, Pak)
                            </h4>
                            <p>
                                Assistant Professor
                            </p>
                           <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">

                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                         <img src="img/default.png" alt="" style="width=150px; height=150px">
                        <div class="caption">
                            <h4>
                                Nadeem Zafar, MS (NCBA&E, Pak)</h4>
                            <p>
                                Assistant Professor
                            </p>
                           <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">

                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                         <img src="img/default.png" alt="" style="width=150px; height=150px">
                        <div class="caption">
                            <h4>
                                Dr. Awais Qasim, Ph.D (GCUL)
                            </h4>
                            <p>
                                Assistant Professor
                            </p>
                           <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">

                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                         <img src="img/default.png" alt="" style="width=150px; height=150px">
                        <div class="caption">
                            <h4>
                                Syed Ali Raza, MS (GCUL, Pak)
                            </h4>
                            <p>
                                Lecturer
                            </p>
                           <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">

                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                         <img src="img/default.png" alt="" style="width=150px; height=150px">
                        <div class="caption">
                            <h4>
                                Asma Kanwal, MS (GCUL, Pak)
                            </h4>
                            <p>
                                Lecturer
                            </p>
                           <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">

                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                         <img src="img/default.png" alt="" style="width=150px; height=150px">
                        <div class="caption">
                            <h4>
                                Adnan Khalid, MS (UCP, Pak)
                            </h4>
                            <p>
                                Lecturer
                            </p>
                           <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">

                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                         <img src="img/default.png" alt="" style="width=150px; height=150px">
                        <div class="caption">
                            <h4>
                                Ijaz Hussain Bukhari, MS (VU)
                            </h4>
                            <p>
                                Lecturer
                            </p>
                          <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">

                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                         <img src="img/default.png" alt="" style="width=150px; height=150px">
                        <div class="caption">
                            <h4>
                                Tauseef Iftikhar, MS (LLU, Pak)
                            </h4>
                            <p>
                                Lecturer
                            </p>
                           <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">

                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                         <img src="img/default.png" alt="" style="width=150px; height=150px">
                        <div class="caption">
                            <h4>
                                Atif Ishaq Khan, MS (VU, Pak)
                            </h4>
                            <p>
                                Lecturer
                            </p>
                          <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">

                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                         <img src="img/default.png" alt="" style="width=150px; height=150px">
                        <div class="caption">
                            <h4>
                                Muhammad Hafeez, MS (GCUL, Pak)
                            </h4>
                            <p>
                                Lecturer
                            </p>
                           <div class="team-social-link">
                                <a href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                </a>
                                <a href="#">

                                    <i class="fa fa-twitter">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus">
                                    </i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-github">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
               
            </fieldset>
            <fieldset >
                <legend>Visiting Faculty</legend>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                        <div class="caption">
                            <h4>
                                Dr. Naheed
                            </h4>
                            <p>
                                German
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                        <div class="caption">
                            <h4>
                                Dr. Sarfraz Khalid
                            </h4>
                            <p>
                                Islamic Studies
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                        <div class="caption">
                            <h6>
                                Dr. Muhammad Abid Nadeem
                            </h6>
                            <p>
                                Islamic Studies
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                        <div class="caption">
                            <h4>
                                Dr. Hassan Mehmood
                            </h4>
                            <p>
                                Mathematics
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                        <div class="caption">
                            <h4>
                                Inam ul Haq
                            </h4>
                            <p>
                                Probability and  Statistical
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                        <div class="caption">
                            <h4>
                                Prof. Saadat Hassan
                            </h4>
                            <p>
                                Mathematics
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                        <div class="caption">
                            <h4>
                                Dr. Nouman Aftab
                            </h4>
                            <p>
                                Chinese (language)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                        <div class="caption">
                            <h6>
                                Fauzia Hussain, M.Phill
                            </h6>
                            <p>
                                Calculus, Linear Algebra
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                        <div class="caption">
                            <h4>
                                Hira Anwar Mirza
                            </h4>
                            <p>
                                Financial Accounting
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                        <div class="caption">
                            <h4>
                                Ameer Mukhtar
                            </h4>
                            <p>
                                Financial Accounting
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                        <div class="caption">
                            <h4>
                                Uzma Saffat
                            </h4>
                            <p>
                                Islamic Studies
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                        <div class="caption">
                            <h4>
                                Hafiz Khurshid Ahmed Qadri
                            </h4>
                            <p>
                                Islamic Studies
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                        <div class="caption">
                            <h4>
                                Kanza Sharif
                            </h4>
                            <p>
                                Pak Studies
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="thumbnail wow fadeInUp" data-wow-delay=".1s">
                        <div class="caption">
                            <h4>
                                Tahira Rasheed
                            </h4>
                            <p>
                                Pak Studies
                            </p>
                        </div>
                    </div>
                </div>

            </fieldset>
        </fieldset>

    </body>
</html>