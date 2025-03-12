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
                        <h1>Frequently Ask Questions </h1>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Home</a></li>
                            <li class="active">FAQ'S</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <style>
            html, body {
                height:220% !important;
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
            <legend style="font-size:35px; width:35% !important; font-family: Square721 Cn BT;">Frequently Asked Questions</legend>
            <div class="container">
                <p style="font-size:16px; padding:10px;">
                    Frequently Asked Questions regarding admissions are,
                </p>
                <fieldset >
                    <legend> BS-CS FAQ'S</legend>
                    <div class="">
                        <p style="font-size:18px; padding:5px;">
                            <span class="fa fa fa-check-square-o fa-1x"></span> <b> Q. What was previous year merit? </b> <br><br>

                             Ans. Merit is calculated according to formula given in merit section. Previous year merit was about 72% for morning and 69% for evening admissions.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. I have a foreign certificate other than A-level. Am I eligible? </b> <br><br>

                             Ans. All foreign certificates obtained after 12 years of education, equivalent to A-level Certification and having same subject groups as given ineligibility section are eligible.
			    In Pakistan, IBCC (Inter-Boards-Committee-of-Chairmen) performs equivalence verification and issues an IBCC Equivalence Certificate. 
			    Such IBCC certificate is sufficient for International Eqiuvalence.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. I appeared/passed my Intermediate Examination in 2016 (or before). Am I eligible?</b> <br><br>

                             Ans. Yes.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. I appeared/passed my Intermediate Examination in 2016 (or before). 
			Now I have appeared  for Marks Improvement in 2017. How my merit will be calculated. </b><br><br>

                           Ans. Your 2017 result or 2016 result will be counted, which one is better. 
				You will yourself enter marks and will show documents at the time of admission.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b> Q. I appeared/passed my F.Sc Pre-Medical (or any other combination without math) in 2016 or before. 
				Now I have appeared for Additional Mathematics in 2016. How my merit will be calculated.</b> <br><br>

                           Ans. Your Inter result will be counted as follows; <br><br>

                           Final Marks = Inter 2016 marks plus Additional Math. Marks minus Biology marks. <br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. I have already passed My Intermediate Examination and result card is issued, but there is no entry of Intermediate marks on Registration form. How can I enter my marks.</b> <br><br>

                           Ans. Intermediate marks entry will start after Entry Test result. Then you can enter your result. <br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. GCU website (or any other source) gives different eligibility criteria for undergraduate programs. What is actual criteria.</b> <br><br>

                           Ans. GCU website shows criteria for General Admissions in GC University. You should follow the criteria for BS Computer Science Admission, given on csadmissions.gcu.edu.pk, set for year 2016 onwards. <br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b> Q. Can students from other provinces/regions of Pakistan apply for admission? And are there any reserved seats for other provinces/regions? </b> <br><br>

                           Ans. Students from Sindh, Balochistan, Khyber Pakhtoonkwa, FATA, PATA, Islamabad, Azad Kashmir and Northern areas are encouraged.
                            However, there is no such quota.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. Is there any quota/preference for Intermediate students of GC University Lahore? </b> <br><br>

                           Ans. Not in Computer Science Department.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. The nearest HBL branch does not accept GCU Admission fee chalan. </b> <br><br>

                           Ans. You should go to some other branch which has arrangements for Academic Fee Chalans, like boards and universities fees.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. Nearest HBL Branch link is down and they are not accepting fees. </b> <br><br>

                           Please wait or go to some other branch.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b> Q I have lost my chalan, before submission. </b> <br><br>

                           Ans. You can download a fresh copy of chalan.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. I have lost my receipt of chalan, after fee submission. </b> <br><br>

                           Ans. Normally HBL verifies chalan submissions online and receipt is not needed at all. 
			    However, if your HBL does not verify your fee, you will have to submit fee again.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. I have deposited fees in bank and I have fee receipt. Where to send it? </b> <br><br>

                           Ans. You should keep it yourself. It will only be needed in case of any problem.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. Can I send fee via Bank Draft/Pay order. </b> <br><br>

                           Ans. No. Only bank deposit or online transfer is accepted<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. can I transfer fee via online/ATM/Mobile transfer? </b> <br><br>
                            Ans. It is possible. You must mention your CNIC in transaction details and you should email scanned copy of transaction reciept with your CNIC to csadmissions@gcu.edu.pk, indicating that it is ATM or Web- Transfer.<br><br>
                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. Website is very slow or not-responding. </b> <br><br>

                           Ans. All websites become slow or jammed, when thousands of people are connected. 
				Please be patient and wait for some suitable time when lesser people are connected. You may need to get a fast internet connection like 3G or 4G.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. Can registration can be made through mobile phone?</b> <br><br>

                           Ans. Yes. Registration can also be made on a 3G/4G Internet enabled Mobile phone, with large screen. 
			  However you will need to open fee chalan and entry test slip on a PC for printing.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. What are timings for online registration? It is compulsory to register in office timing? </b> <br><br>

                           Ans. Website is working 24 hours and seven days a week, and it is much more better to register in timing of lesser usage like after noon and late night to early morning.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. What if website does not respond at all. </b> <br><br>

                           Ans. You can come to GC University Lahore for online registration.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. I have registered, but cannot upload picture. </b> <br><br>

                           Ans. Again, in rush hours, pictures uploading/downloading is very slow. In case, you are not able to upload picture at all, you should follow the following procedure.<br><br>

                             Scan the picture and name it as your CNIC (e.g. 33202133769804.jpg). It must be two MB or lesser in size. (right click on picture to check its size) <br><br>

                             Email it to csadmission@gcu.edu.pk<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. How can those candidates get registration, who do not have access to internet, or do not have email and mobile numbers.</b> <br><br>

                           Ans. Such candidates can come to GC University Lahore for registration.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. Foreign-based Pakistanis who have not applied for Pakistani CNIC or NADRA registration, can apply?</b> <br><br>

                           Ans. Yes. They need to email their particulars and they will be issued a temporary ID. However, students will have to register in NADRA and fulfill other legal requirements, if they get admission. Also, fee will have to be submitted in a Pakistani HBL only.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. I have registered online, but where is my login/password?</b> <br><br>

                           Ans. You do not need login/password for entry test registration. Your CNIC/B-form number is your login if you need to go to website again.

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. I need to correct/modify some information after registration.</b> <br><br>

                           Ans. If you want to change/correct your primary information i.e. name, father name, CNIC, mobile number or email or postal address, you should email to csadmissions@gcu.edu.pk with corrected information and scanned copy of your father ID card. If you want to change some other information, you should wait until entry test result.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b> 	Q. I want to apply for a reserved seat.</b> <br><br>

                           Ans. Please apply for a reserved seat after passing entry test.<br><br>

                            <span class="fa fa fa-check-square-o fa-1x"></span> <b>  Q. My name has appeared in Merit list. However, I cannot submit Admission fee. Is it possible to submit fees in installments, get discount or some time relaxation.</b> <br><br>

                           Ans. Please contact University Authorities for fee matters. Admission Cell cannot help.<br><br>
                        </p>
                    </div>
                </fieldset>

            </div>
        </fieldset>

    </body>
</html>