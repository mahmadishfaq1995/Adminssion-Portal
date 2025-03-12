<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <body>
        <!--breadcrumbs start-->
        <div class="breadcrumbs" style="margin-bottom: 0px;">
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
            <legend style="font-size:35px; width:35% !important; font-family: Square721 Cn BT;">PhD Program</legend>
            <div class="container"> <p style="font-size:16px; padding:10px;">
                    A PhD is a long, in depth research exploration of one topic. By long we're typically talking about 6 years.
		By in depth we mean that at the end of the Ph.D. A candidate will be the world expert or close to it in your particular area.
 He will know more than his advisor about his particular research area. He will know about his research than anyone at his school. 
By one we mean that by the last couple years of PhD, a candidate will typically be working on only one narrow problem. 
The PhD is not about breadth, it is about depth.

                    In recent years there has been a national debate about the nature and function of the decorate.
			Formely it was principally about the production of a thesis, creative work or publications. 
			Now it is organized that the doctorate is equally about developing the skills and confidence to conduct research.
Various national reports have underlined the importance of developing skills at all levels to enable Pakistan to complete in the global market.
This debate is somtimes presented as reflecting a tension between a focus on training and a focus on the products of research but the Govt. 
College University regards the acquisition of research skills as an essential part of the doctoral experience culminating in the production of a major original research work. 
The doctorate is no longer simply a path for career academics; it is now a path of choice for many who want the doctoral experience as part of their personal development in relation to a wide range of careers.

                    The University has therefore designed a Doctoral program which provides the opportunity to gain a good understanding of research techniques, 
a wider range of transferable skills and a deeper knowledge of the chosen subject area.
As a consequence the program would have an integrated taught program in research skills and discipline studies leading to the Master of Research as an intermediate award.
                </p>
                <fieldset >
                    <legend>Admission Requirements</legend>
                    <div class="container centered">
                        <p style="font-size:16px; ">
                        <ul style="list-style:none;">
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Eighteen years of education leading to MS degree with thesis relevant discipline</li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Minimum CGPA 3.00/4.00</li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>GRE(Subject)</li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Interview with Ph.D Proposal</li>
                        </ul>
                        </p>
                    </div>
                </fieldset>
                <fieldset >
                    <legend>Admission Procedure</legend>
                    <div class="container centered">
                        <p style="font-size:16px; ">
                        <ul style="list-style:none;">
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>A candidate may apply to the Registrar for provisional admission to the Ph.D. programme in any semester.</li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>There shall be a Selection Committee in the department as constituted by the relavent BPGS/ RAC on recommendation of the Head of the department.</li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i>A candidate selected by the Selection Committee shall be provisionally admitted and may be required to pass the prerequisite non credit courses as prescribed by the Selection Committee.</li>
                        </ul>
                        </p>
                    </div>
                </fieldset>
                <fieldset >
                    <legend>Degree Requirements</legend>
                    <table class="table table-bordered" style='table-layout:fixed'>
                        <thead>
                            <tr>
                                <th>Area</th>
                                <th>SCH</th>
                            </tr>
                        </thead>
                        <tbody id="bs_body">
                            <tr>
                                <td>(a) Courses</td>
                                <td>18</td>
                            </tr>
                            <tr>
                                <td>(b) Research Thesis</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td><b>Total</b></td>
                                <td>48</td>
                            </tr>
                        </tbody>
                    </table>
                    <b> Note: </b> For the award of PhD degree, the University complies with HEC guidelines and for further information you may consult the Department.
                </fieldset>
            </div>
        </fieldset>


    </body>
</html>