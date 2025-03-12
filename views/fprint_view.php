<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <style type="text/css">
        #head{
            color:white;
            background-color:black;
            height:35px;
            font-size:30px;
            width:100%
        }

        textarea {
            white-space: normal;
            text-align: center;
        }
        .admit2 td {
            padding:8px;
        }
        .admit2 {
            position:absolute;
            top:250px;
            left:400px;
        }
        #admit td {
            padding:2px;
        }
        #admit{
            position:absolute;
            top:250px;
            left:300px;
        }
        hr {
            border: 2px;
            width: 96%;
            color: #FFFF00;
            height: 1px;
            display:block;
        }

        #main_body{
            position:absolute;
            width:1100px;
        }

        #logo{
            position:absolute;
            top:70px;
            left:370px;
        }
        #heading{
            position:relative;
            left:20px;
        }
        #photo{
            position:absolute;
            left:900px;
            top:100px;
        }
        #my {
            position:absolute;
            top:480px;
            left:267px;
        }
        #fy {
            position:absolute;
            top:480px;
            left:327px;
        }
        #dob{
            position:absolute;
            top:445px;
            left:267px;
        }
        #nic{
            position:absolute;
            top:507px;
            left:267px;
        }
        #fname{
            position:absolute;
            top:547px;
            left:267px;
        }
        #fnic{
            position:absolute;
            top:577px;
            left:267px;
        }
        #gnic{
            position:absolute;
            top:653px;
            left:271px;
        }
        #ic{
            position:absolute;
            top:637px;
            left:590px;
        }
        #rno{
            position:absolute;
            top:686px;
            left:271px;
        }
        #mno{
            position:absolute;
            top:667px;
            left:590px;
        }
        #mad{
            position:absolute;
            top:720px;
            left:271px;
        }
        #mad2{
            position:absolute;
            top:745px;
            left:271px;
        }
        #res{
            position:absolute;
            top:760px;
        }
        #rad{
            position:absolute;
            top:780px;
            left:271px;
        }
        #rad2{
            position:absolute;
            top:805px;
            left:271px;
        }
        #sec{
            position:absolute;
            top:800px;
            color:white;
            background-color:black;
            height:35px;
            font-size:30px;
            width:100%
        }
        #cad{
            position:absolute;
            top:875px;
            left:0px;

        }
        #cad td{
            padding:10px;
        }
        #star{
            position:absolute;
            top:1055px;
            left:370px;

        }
        #dt{
            position:absolute;
            top:1110px;
            left:570px;

        }
        #dtt{
            position:absolute;
            top:1195px;
            left:570px;

        }

        input{
            height:20px;
        }
        #dt2{
            position:absolute;
            top:1125px;
        }
        #hea{
            position:absolute;
            top:1160px;
            left:290px;
        }
        #hea2{
            position:absolute;
            top:1210px;
            left:430px;
        }
        #fno{
            position:absolute;
            top:1210px;
        }
        #na{
            position:absolute;
            top:1265px;
        }
        #fna{
            position:absolute;
            top:1265px;
            left:430px;
        }
        #photod{
            position:absolute;
            top:1170px;
            left:910px;
        }
        #date{
            position:absolute;
            top:1290px;
            left:290px;
        }
        #date1{
            position:absolute;
            top:1315px;
            left:290px;
        }
        #line{
            position:absolute;
            top:1345px;
        }
        #line2{
            position:absolute;
            top:1370px;
            left:0px;
        }
        #line3{
            position:absolute;
            top:1390px;
            left:0px;
        }
        #line4{
            position:absolute;
            top:1390px;
            left:395px;
        }
        #line5{
            position:absolute;
            top:1390px;
            left:775px;
        }
    </style>
    <body onload="window.print();" id="main_body">
        <p id="head" align="center">Department Of Computer Science Admission 2017</p>
        <div>
            <br><br>
            <table border="1">
                <b>
                    <div>Bank Draft/Pay Order Information </div>
                </b>
                <tr>
                    <td>
                        <br>
                        <b>
                            <div>Draft/PO Number_______________</div>
                            <br>
                            <div>Draft/PO Number_______________</div>
                            <br>
                            <div>Amount&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<u> Rs. 500/- Only&nbsp&nbsp&nbsp&nbsp&nbsp</u></div>
                            <br>
                            <div>Date Of Issue&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp_______________</div>
                        </b>
                    </td>

                </tr>

            </table>
        </div>
        <div id="logo">
            <img src="<?php echo base_url('img/logo_form.png'); ?>">
            <h2 id="heading">BSCS (M/E) Application Form</h2>
        </div>
        <img id="photo" src="<?php echo base_url('img/user_images/' . $data[0]->image); ?>" height="140px" width="140px">
        <div id="admit">
            <table border="1" >
                <tr>
                    <td colspan="2">
                        <b>Admitted</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>YES</b>
                    </td>
                    <td>
                        <b>___<b>
                                </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>No</b>
                                    </td>
                                    <td>
                                        <b>___</b>
                                    </td>
                                </tr>
                                </table>
                                </div>
                                <div class="admit2">
                                    <table border="1" >
                                        <tr>
                                            <td>
                                                <b>_______________________________</b>
                                            </td>
                                            <td>
                                                <b>____________________________ <b>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>Convener of Admission Committee</b>
                                                            </td>
                                                            <td>
                                                                <b>Registrar </b>
                                                            </td>
                                                        </tr>
                                                        </table>
                                                        </div>
                                                        <div id="hr">
                                                            <hr></div>
                                                        <p id="head">Section-I Personal Information </p>
                                                        Applicant Name
                                                        <small>(In Block Letters as per SSC)</small>  <input type="text" value="<?php echo $data[0]->name; ?>" size="105" disabled>
                                                        <br><br>
                                                        Date Of Birth<input type="text" placeholder="Date/month/year" value="<?php echo $data[0]->dob; ?>" size="35" id="dob" disabled><br>
                                                        <div id="Geni">
                                                            <p>Select Gender</p>
                                                            <div id="my">Male<input type="checkbox" id="maale" name="gen" value="Male" disabled></div>
                                                            <div id="fy">Female<input type="checkbox" id="feem" name="gen" value="Female" disabled></div>
                                                        </div>
                                                        <p>Applicant CNIC</p><input type="text" id="nic" placeholder="XXXXX-XXXXXXX-X" value="<?php echo $data[0]->cnic; ?>" disabled>
                                                        <p>Father Name</p>  <input type="text" id="fname" size="105" value="<?php echo $data[0]->father_name; ?>" disabled>
                                                        <p>Father CNIC</p><input type="text" id="fnic" placeholder="XXXXX-XXXXXXX-X" value="<?php echo $data[0]->father_cnic; ?>" disabled>
                                                        Relation <input type="text" size="105" value="<?php echo $data[0]->relation; ?>" disabled>
                                                        <p>District</p> <input type="text" id="gnic" placeholder="XXXXX-XXXXXXX-X" value="<?php echo $data[0]->district; ?>" disabled>
                                                        <p id="ic">Financier Monthly Income <input type="text" value="<?php echo $data[0]->father_income; ?>" disabled></p>
                                                        <p>Phone Number. (Res) </p> <input type="text" id="rno" value="<?php echo $data[0]->phone_no; ?>" style="margin-top:5px;"disabled>
                                                        <p id="mno">Mobile Number <input type="text" value="<?php echo $data[0]->mobile_no; ?>" disabled></p>
                                                        Maliling Address <input type="text" id="mad" size="105" value="<?php echo $data[0]->address; ?>" disabled>

                                                        <p id="res">Resedential Address</p> <input type="text" id="rad" size="105" value="<?php echo $data[0]->address; ?>" disabled>

                                                        <p id="sec">Section-II Academic Record </p>
                                                        <table border="1" id="cad">
                                                            <tr>
                                                                <td>Certificate
                                                                    /Degree</td>
                                                                <td>Year</td>
                                                                <td>Roll No</td>
                                                                <td>Obtained
                                                                    Marks/GPA</td>
                                                                <td>Maximum
                                                                    Marks</td>
                                                                <td>Subjects/Major</td>
                                                                <td>Board/University</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Matriculation
                                                                    / O-Level /
                                                                    Equivalent </td>
                                                                <td><?php echo $data[0]->year_matric; ?></td>
                                                                <td><?php echo $data[0]->rollno_matric; ?></td>
                                                                <td><?php echo $data[0]->marks_matric; ?></td>
                                                                <td><?php echo $data[0]->total_matric; ?></td>
                                                                <td>N/A</td>
                                                                <td><?php echo $data[0]->board_matric; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Inter. Part-I </td>
                                                                <td><?php echo $data[0]->year_inter1; ?></td>
                                                                <td><?php echo $data[0]->rollno_inter1; ?></td>
                                                                <td><?php echo $data[0]->marks_inter1; ?></td>
                                                                <td><?php echo $data[0]->total_inter1; ?></td>
                                                                <td><?php echo $data[0]->major_inter1; ?></td>
                                                                <td><?php echo $data[0]->board_inter1; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Inter. Part II/
                                                                    A-Level/Equivalent </td>
                                                                <td><?php echo $data[0]->year_inter2; ?></td>
                                                                <td><?php echo $data[0]->rollno_inter2; ?></td>
                                                                <td><?php echo $data[0]->marks_inter2; ?></td>
                                                                <td><?php echo $data[0]->total_inter2; ?></td>
                                                                <td><?php echo $data[0]->major_inter2; ?></td>
                                                                <td><?php echo $data[0]->board_inter2; ?></td>


                                                            </tr>

                                                        </table>

                                                        <script>
                                                            var gender = '<?php echo $data[0]->gender; ?>';
                                                            if (gender == 'male')
                                                                document.getElementById("maale").checked = true;
                                                            else
                                                                document.getElementById("feem").checked = true;
                                                        </script>
                                                        </body>
                                                        </html>