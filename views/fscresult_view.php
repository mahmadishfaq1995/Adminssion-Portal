<style>
    th{
        background-color: #34495E;
        color:white;
    }
    td{
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
    }
    .modal-body:not(.two-col) { padding:0px }
    .glyphicon { margin-right:5px; }
    .glyphicon-new-window { margin-left:5px; }
    .modal-body .radio,.modal-body .checkbox {margin-top: 0px;margin-bottom: 0px;}
    .modal-body .list-group {margin-bottom: 0;}
    .margin-bottom-none { margin-bottom: 0; }
    .modal-body .radio label,.modal-body .checkbox label { display:block; }
    .modal-footer {margin-top: 0px;}
    @media screen and (max-width: 325px){
        .btn-close {
            margin-top: 5px;
            width: 100%;
        }
        .btn-results {
            margin-top: 5px;
            width: 100%;
        }
        .btn-vote{
            margin-top: 5px;
            width: 100%;
        }

    }
    .modal-footer .btn+.btn {
        margin-left: 0px;
    }
    .progress {
        margin-right: 10px;
    }
</style>
<div class="breadcrumbs" style="margin-bottom:0px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <h1>Intermediate Result</h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li class="active"><a href="#bs_map">Intermediate</a></li>

                </ol>
            </div>
        </div>
    </div>
</div>
<br>
<div class="login-bg" style="">
    <div class="container">
        <?php if (isset($major) && isset($marks) && isset($name)) { ?>
            <?php if ($marks > 19) { ?>
                <script>

                </script>
                <form class="form-signin wow fadeInUp" style="width:500px;"  method='POST'>
                    <h2 class="form-signin-heading" style="background:#374850;">Enter Intermediate Marks Out of 1100</h2>
                    <div class="login-wrap">
                        <span style="color:red;"> Note: A Level Students Has to Obtain Equivalence Certificate and Submit their Equivalence Marks in Computer Science Department.</span>
                        <br>
                        <label> Name</label>

                        <input type="text" class="form-control"  placeholder="Name" value="<?= $name ?>" autofocus readonly>

                        <label> Entry Test Marks</label>

                        <input type="text" name="testmarks" class="form-control" value="<?= $marks ?>" autofocus readonly>

                        <label> CNIC </label>

                        <input type="text" class="form-control" name="cnic" id="cnic" placeholder="CNIC" maxlength="13" value="<?= $cnic ?>" autofocus readonly>

                        <label> Enter Intermediate Roll Number </label>

                        <input type="text" class="form-control" name="interroll" id="interroll" value="<?= $rollinter ?>" placeholder="Enter Inter Roll Number (Part II)" maxlength="13" autofocus required>

                        <label> Enter Marks Intermediate out of 1100 </label>

                        <input type="text" class="form-control" name="intermarks" id="intermarks" placeholder="Inter Marks out of 1100" maxlength="13" autofocus required>

                        <label> Year of Intermediate Result </label>

                        <input type="text" class="form-control" name="interyear" id="interyear" placeholder="Year to pass Intermediate" maxlength="13" autofocus required>

                        <label> Subject Combination</label>

                        <input type="text" name="interboard" class="form-control"  value="<?= $major ?>"  autofocus readonly>
                        <label> Intermediate Board</label>

                        <input type="text"  class="form-control"  value="<?= $board ?>"  autofocus readonly>

                        <span style="color:red;"> Note: All those students who Qualified entry test and they want to apply for Reserve Seats/ Sports OR Hafiz e Quran, They are directed to Contact Computer Science Department Office (PG Block) along with relevant Original Documents.</span>
                        <input type="hidden" name="matric" class="form-control"  value="<?= $matric ?>" >

                        <br><br>

                        <button class="btn btn-lg btn-primary btn-block"  style="background:#374850;" type="submit">Save Marks</button>


                    </div>


                </form>
            <?php } else { ?>
                <div class="alert alert-danger"  ><strong><span id="">Sorry</span></strong><span id="infod"> You Cannot Apply Due to Less Marks in Test.</span></a></div>

                <?php
            }
        }
        ?>
        <?php
        if (isset($done)) {
            echo '<div class="alert alert-success"  ><strong><span id="">Success</span></strong><span id="infod"> Your marks has been saved. Your Aggrigate is <span style="font-weight:bold; font-size:20px;">' . $done . '</span></span></a></div>';
        }
        if (isset($notdone)) {
            echo '<div class="alert alert-danger"  ><strong><span id="">Sorry !!</span></strong><span id="infod"> Your Intermediate Marks are Not Enough to Apply.</span></a></div>';
        }
        ?>
        <div class="col-md-4"></div>
        <?php
        if (isset($hide)) {
            echo '<div class="form-wrapper col-md-5" style="display:none;">';
        } else {
            echo '<div class="form-wrapper col-md-5">';
        }
        ?>

        <div class="alert alert-success" id="bannere" style="width: 119%; padding: 11px;margin-top: 30px; margin-bottom: -30px; display:none;"><strong><span id="status"></span></strong><span id="info"></span></a></div>
        <div class="alert alert-danger" id="bannerd" style="width: 119%; padding: 11px;margin-top: 30px; margin-bottom: -30px; display:none;"><strong><span id="statusd"></span></strong><span id="infod"></span></a></div>
        <span style="font-size:16px; color:red;"> Note : Last Date of Intermediate Marks Submission is <br><b> 20th September, 2017 </b>. </span>

        <form class="form-signin wow fadeInUp"  method='POST'>
            <h2 class="form-signin-heading" style="background:#374850;">Enter CNIC and Roll Number</h2>
            <div class="login-wrap">
                <br>
                <label> Enter CNIC (Without Dashes)</label>

                <input type="text" class="form-control" name="data" id="data" placeholder="CNIC (Without dashes)" maxlength="13" autofocus required>
                <br>
                <label> Enter Roll Number</label>

                <input type="text" class="form-control" name="data1" id="data1" placeholder="Roll Number" maxlength="13" autofocus required>

                <br>

                <button class="btn btn-lg btn-primary btn-block"  style="background:#374850;" type="submit">Process to Enter Marks</button>


            </div>


        </form>

    </div>
</div>
</div>