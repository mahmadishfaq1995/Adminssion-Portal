<!DOCTYPE html>
<html>
    <body>
        <style>
            html, body {
                height: 190% !important;
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
        <!--breadcrumbs start-->
        <div class="breadcrumbs" style="margin-bottom:0px !important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <h1>BS Program</h1>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li><a href="<?php echo base_url('Home'); ?>">Home</a></li>
                            <li class="active">BS Program</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view("bsslide_view"); ?>
        <div class="">
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
                <legend style="font-size:35px; width:35% !important; font-family: Square721 Cn BT;">BS Computer Science Program</legend>
                <div class="container"> <p style="font-size:16px; padding:10px;">
                        We are offering an exciting new portfolio of Undergraduate courses designed to ensure that our students have the knowledge and abilities
			 that they will need for their future careers. 
			<!--The BS programmes of Computer Science is integral to the course portfolio, 
			but students will now be able to choose their final projects in different fields of IT, 
			depending on their future career aspirations, 
			in areas such as business, digital media, gaming platforms, software engineering and Wireless Networks.-->

                        BS (CS) Degree program is of 135 credit hours, and spread over 4 years with 2 Semesters in each year. 
			The BS (CS) students are required to complete 135 credit hours followed by a thesis in last 4th year to complete the BS(CS) degree.
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
                                        </tr>
                                    </thead>
                                    <tbody id="bs_body">
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
                                        <tr>
                                            <td>6</td>
                                            <td>Programing Fundamentals</td>
                                            <td>CS-1225</td>
                                            <td>4 (3+1)</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Digital Logic Design</td>
                                            <td>CS-2033</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Linear Algebra</td>
                                            <td>CS MATH-2101</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Communication Skills</td>
                                            <td>CS ENG-1201</td>
                                            <td>3 </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Probabailty and Statistics</td>
                                            <td>CS STAT -1101</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Object Oriented Programming</td>
                                            <td>CS-1201</td>
                                            <td>4 (3+1)</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Discrete Structures</td>
                                            <td>CS-1203</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>Financial Accounting</td>
                                            <td>CS-1207</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>Multivariate Calculus</td>
                                            <td>CS MATH-3101</td>
                                            <td>3 </td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>Cognitive Psychology</td>
                                            <td>CS-2107</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>Data Structures and Algorithms</td>
                                            <td>CS-2101</td>
                                            <td>4 (3+1)</td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td>Microprocessor and Assembly Language</td>
                                            <td>CS-2207</td>
                                            <td>4 (3+1)</td>
                                        </tr>
                                        <tr>
                                            <td>18</td>
                                            <td>Visual Programming</td>
                                            <td>CS-2201</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>19</td>
                                            <td>Logical paradigms in Computing</td>
                                            <td>CS-2208</td>
                                            <td>3 </td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td>Differential Equations</td>
                                            <td>CS MATH -3201</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>21</td>
                                            <td>Database Systems</td>
                                            <td>CS-2014</td>
                                            <td>3 (2+1)</td>
                                        </tr>
                                        <tr>
                                            <td>22</td>
                                            <td>Design and Analysis of Algorithms</td>
                                            <td>CS-3108</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>23</td>
                                            <td>Data Communication and Networks</td>
                                            <td>CS-3106</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>24</td>
                                            <td>Theory of Automata</td>
                                            <td>CS– 2044</td>
                                            <td>3 </td>
                                        </tr>
                                        <tr>
                                            <td>25</td>
                                            <td>Operation Research</td>
                                            <td>CS-3109</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>26</td>
                                            <td>Professional Practices</td>
                                            <td>HM – 3123</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>27</td>
                                            <td>Operating Systems</td>
                                            <td>CS-2205</td>
                                            <td>3 (2+1)</td>
                                        </tr>
                                        <tr>
                                            <td>28</td>
                                            <td>Software Engineering</td>
                                            <td>CS-2105</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>29</td>
                                            <td>Artifical Intelligence and Neural Networks</td>
                                            <td>CS-3102</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>30</td>
                                            <td>Compiler Construction</td>
                                            <td>CS-4202</td>
                                            <td>3 </td>
                                        </tr>
                                        <tr>
                                            <td>31</td>
                                            <td>Foreign Language (French)</td>
                                            <td>CS-4105</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>32</td>
                                            <td>Object Oriented Analysis and Design</td>
                                            <td>CS-4108</td>
                                            <td>3 </td>
                                        </tr>
                                        <tr>
                                            <td>33</td>
                                            <td>Human Computer Interaction</td>
                                            <td>CS-4122</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>34</td>
                                            <td>Computer Architecture</td>
                                            <td>CS-2063</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>35</td>
                                            <td>Computer Science Elective-I</td>
                                            <td>NA</td>
                                            <td>3 </td>
                                        </tr>
                                        <tr>
                                            <td>36</td>
                                            <td>Computer Science Elective-II</td>
                                            <td>NA</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>37</td>
                                            <td>Project</td>
                                            <td>NA</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>38</td>
                                            <td>Information Security</td>
                                            <td>CS – 4215</td>
                                            <td>3 </td>
                                        </tr>
                                        <tr>
                                            <td>39</td>
                                            <td>Numerical Computing</td>
                                            <td>CS-4216</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>40</td>
                                            <td>Intellectual Property Rights and Cyber Law</td>
                                            <td>CS-4217</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>41</td>
                                            <td>Computer Science Elective-III</td>
                                            <td>NA</td>
                                            <td>3 </td>
                                        </tr>
                                        <tr>
                                            <td>42</td>
                                            <td>Computer Science Elective-IV</td>
                                            <td>NA</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>43</td>
                                            <td>Project</td>
                                            <td>NA</td>
                                            <td>3</td>
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
                            <div class="col-md-4 col-xm-1">
                                <h4>Total Semester: <b>8</b></h4>
                            </div>
                            <div class="col-md-4 col-xm-1">
                                <h4>Total Subjects: <b>43</b></h4>
                            </div>
                            <div class="col-md-4 col-xm-1">
                                <h4>Total Credit Hours: <b>133 </b></h4>
                            </div>
                        </div>
                        <br>
                        <table class="table table-bordered" style='table-layout:fixed; width:100%;'>
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
                        <b> Note: </b> Department has right to change, withdraw, and swap any of the Elective course anytime without prior notice.
                    </fieldset>
                </div>
            </fieldset>
        </div>
    </body>
</html>