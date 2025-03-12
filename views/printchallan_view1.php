<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

    <body>
        <style>
            .form-cont{
                border: 1px solid #e2e2e4;
                box-shadow: none;
                color: #c2c2c2;
                border-radius: 2px;
                padding: 6px 10px;
                height: 30px;
                width:155px;
                font-size: 14px;
            }
        </style>
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <h4> BSCS Admission System</h4>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li><a href="<?php echo base_url('Home'); ?>">Home</a></li>
                            <li class="">  <img src="<?php echo base_url('img/user2-160x160.png'); ?>" width="20px" class="user-image img-circle" alt="User Image"> &nbsp;&nbsp; <?php echo $this->session->userdata('name'); ?></li>

                            <li><button type="button" id="sign_out" class="btn btn-info btn-sm">
                                    <span class="fa fa-sign-out" ></span> Log out
                                </button>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs end-->

        <!--container start-->
        <div class="login-bg">
            <div class="container">
                <div class="form-wrapper row">
                    <div class="col-md-1"></div>
                    <form class="form-signin wow fadeInUp col-md-4 center-block" style="margin-bottom: 10px;">
                        <h2 class="form-signin-heading">Upload Picture</h2>
                        <div class="login-wrap">

                            <div id="challan">
                                <form>
                                    <img src=" <?php echo base_url('img/user_images/' . $this->session->userdata("id") . '.jpg'); ?>" width="150px" height="100px" id="image_user">  <input type="file" style="margin:5px;" id="picture_submit" required>
                                </form>
                            </div>
                            *Note : If your picture is not visible, email it to csadmissions@gcu.edu.pk with your CNIC number..

                        </div>

                    </form>
                    <div class="col-md-1"></div>
                    <!-- <form class="form-signin wow fadeInUp col-md-4 center-block" style="margin-bottom: 10px;">
                         <h2 class="form-signin-heading">Select Print Option</h2>
                         <div class="login-wrap">

                            <div class="">
                                <!-- <button  class="btn btn-default" onclick="window.open('fprint/index/<?php echo $this->session->userdata('id'); ?>');">Print Form</button>
                               &nbsp;&nbsp;&nbsp;  <button  class="btn btn-default" onclick="window.open('cprint');">Print Bank Challan(Rs. 500)</button>
                             </div>
                             <br />*Note : bank challan deposited after 10th Aug must be shown in CS Admission cell, GCU or emailed to csadmissions@gcu.edu.pk on or before 18Aug.<br />

                         </div>

                     </form> -->
                    <form class="form-signin wow fadeInUp col-md-4 center-block" method="POST" style="margin-bottom: 10px;">
                        <h2 class="form-signin-heading">Enter Your Inter Part II Marks</h2>
                        <div class="login-wrap">
                            <?php if ($testmarks > 19) { ?>
                                Roll Number : <input type="text" class="form-control" id="rollnumber2" name="rollnumber2" value="<?php
                                if (isset($roll2)) {
                                    echo $roll2;
                                }
                                ?>" required>
                                Marks : <input type="text" class="form-control" id="marks2" name="marks2" value="<?php
                                if (isset($marks2)) {
                                    echo $marks2;
                                }
                                ?>" required>
                                Board : <input type="text" class="form-control" id="baord2" name="baord2" value="<?php
                                if (isset($board2)) {
                                    echo $board2;
                                }
                                ?>" disabled>
                                Year : <input type="text" class="form-control" id="year2" name="year2" value="<?php
                                if (isset($year2)) {
                                    echo $year2;
                                }
                                ?>" required>

                                <input type="submit" class="btn btn-success" value="Save">
                                <?php
                            } else {
                                echo "You Are Not Eligible...";
                            }
                            ?>
                        </div>
                        <span style="color:red;"> Note: Enter Your Inter Part 2 Marks Carefully.</span>
                    </form>
                    <form class="col-md-1">

                    </form>

                </div>
            </div>
        </div>
        <!--container start-->
        <div class="login-bg">
            <div class="container">
                <div class="form-wrapper row">
                    <form class="col-md-1">

                    </form>
                    <form class="form-signin wow fadeInUp col-md-4 center-block" style="margin-bottom: 10px;">
                        <h2 class="form-signin-heading">Edit Saved Information</h2>
                        <div class="login-wrap">

                            <div class="">
                                <input type="button"  class="btn btn-default" onclick="edit_personal(<?php echo $this->session->userdata('id'); ?>);" value="Personal Info">
                                <input type="button"  class="btn btn-default" onclick="edit_academic(<?php echo $this->session->userdata('id'); ?>);" value="Academic Info">
                            </div>

                        </div>

                    </form>

                    <form class="col-md-1">

                    </form>
                    <form class="form-signin wow fadeInUp col-md-4 center-block" style="margin-bottom: 10px;">
                        <h2 class="form-signin-heading">Test Slip and Result</h2>
                        <div class="login-wrap">

                            <div class="">
                                <?php
                                $roll = $this->session->userdata('roll_no');
                                //$testmarks = $this->session->userdata('testmarks');
                                if ($roll == 0) {
                                    //	echo "Your fee was not received in GCU. Send your paid challan picture immediately to csadmissions@gcu.edu.pk";
                                    echo "Absent";
                                } else {

                                    //echo "if Entry Test slip does not print, just note your roll number and test center below </br>";
                                    echo "Roll Number:" . $roll . "</br>";
                                    echo "Your Test Marks:" . $testmarks . "</br>";
                                    echo "If your test marks are greater or equal to 20, you can apply for admission after intermediate result declaration";
                                    /* if($roll <15000)
                                      {
                                      echo "Reporting Time: 9:30 AM</br>";
                                      if($roll<5000)
                                      {
                                      echo "Female Test Center: ";
                                      if($roll<501)
                                      {
                                      echo "Biolgy Building";
                                      }
                                      else
                                      {
                                      if($roll<731)
                                      {
                                      echo "Physics Department";
                                      }
                                      else
                                      {
                                      if($roll<951)
                                      {
                                      echo "Engineering Department";
                                      }
                                      else
                                      {
                                      if($roll<1151)
                                      {
                                      echo "Institute of Biotechnology";
                                      }
                                      else
                                      {
                                      echo "SDSC Building";
                                      }
                                      }
                                      }

                                      }
                                      echo ",Science Block at 9:30 AM.";
                                      }
                                      else
                                      if($roll<5221)
                                      {
                                      echo "Male Test Center: Chemistry Department";
                                      }
                                      else
                                      {
                                      if($roll<6018)
                                      {
                                      echo "Male Test Center: GCU Main Building";
                                      }
                                      else
                                      {
                                      if($roll<6285)
                                      {
                                      echo "Male Test Center: GCU Examination Basement";
                                      }
                                      else
                                      {
                                      if($roll<6485)
                                      {
                                      echo "Male Test Center: GCU Examination Lecture Rooms (ELR)";
                                      }
                                      else
                                      {
                                      if($roll<6685)
                                      {
                                      echo "Male Test Center: ZA Bukhari Hall";
                                      }
                                      else
                                      {
                                      echo "Male Test Center: Postgraduate(PG) Block";
                                      }
                                      }
                                      }

                                      }
                                      }
                                      }
                                      //roll number 15001 onwards
                                      else
                                      {
                                      echo "Reporting Time: 12:30 PM </br>";
                                      if($roll<15221)
                                      {
                                      echo "Male Test Center: Chemistry Department";
                                      }
                                      else
                                      {
                                      if($roll<16018)
                                      {
                                      echo "Male Test Center: GCU Main Building";
                                      }
                                      else
                                      {
                                      if($roll<16285)
                                      {
                                      echo "Male Test Center: GCU Examination Basement";
                                      }
                                      else
                                      {
                                      if($roll<16485)
                                      {
                                      echo "Male Test Center:GCU Examination Lecture Rooms (ELR)";
                                      }
                                      else
                                      {
                                      if($roll<16685)
                                      {
                                      echo "Male Test Center: ZA Bukhari Hall";
                                      }
                                      else
                                      {
                                      echo "Male Test Center:Postgraduate Block (PG)";
                                      }
                                      }
                                      }

                                      }
                                      }
                                      } */
                                }
                                //echo "</br> Please bring your CNIC, Clipboard/File and Pen/Pencil with you, but leave mobiles and calculator at home.";


                                echo "<br><b>Your Entry Test Marks:" . $testmarks . "</b></br>";
                                if ($testmarks > 19) {
                                    echo "You are eligible to apply";
                                } else {
                                    echo "You are not eligible to apply";
                                }
                                ?>
                              <!--  <input type="button" id="issue_slip" class="btn btn-default"  value="Entry Test Slip"> -->


                                <!-- <input type="button"  class="btn btn-default"  value="Test Result">-->
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="login-bg">
            <div class="container">
                <div class="form-wrapper row">
                    <form class="col-md-1">

                    </form>
                    <!-- <form class="form-signin wow fadeInUp col-md-4 center-block" style="margin-bottom: 20px;">
                          <h2 class="form-signin-heading">Submit Challan form Soft Copy</h2>
                          <div class="login-wrap">

                              <div id="challan">
                                                          <form>
                                  <input type="file" id="challan_upload" required> <input type="submit" id="btn_challan" value="Upload Challan" class="btn btn-default" >
                              </form>
                                                          </div>

                          </div>

                      </form> -->

                </div>
            </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModal" role="dialog" tabindex="-1" id="myModal" class="modal fade" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" id="m_head">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                    </div>
                    <div class="modal-body" id="m_body" >

                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
        <div id="resultmodel" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Entry Test Marks</h4>
                    </div>
                    <div class="modal-body">
                        <?php
                        echo "<h3><b>Your Entry Test Marks:" . $testmarks . "</b></h3></br>";
                        if ($testmarks > 19) {
                            echo "<h4>You are Eligible to Apply</h4>";
                        } else {
                            echo "<h4>You are not Eligible to Apply</h4>";
                        }
                        ?>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


        <script>

            var challan_status = '<?php echo $challan; ?>';
            if (challan_status != 'no') {
                document.getElementById('challan').innerHTML = challan_status;
            }
        </script>
        <!-- modal -->
    </body>

</html>
