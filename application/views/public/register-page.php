<?php include('header.php')?>
    <!--Begin content wrapper-->
    <div class="content-wrapper">
        <div class="account-page register text-center">
            <div class="container" style="margin-top: 40px;">
                <div class="account-title">
                    <h4 class="heading-light">REGISTER FOR OUR ALUMNI DASHBOARD</h4>
                </div>
                <?php if(isset($_SESSION['success'])) { ?>
                    <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
                <?php } ?>
                <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                <div class="account-content">
                    <form name="userreg" action="register" method="POST">
                        <div class="form-group input-box fullname">
                            <input class="form-control" name="fullname" id="fullname" type="text" placeholder="Full Name">
                        </div>
                        <div  class="form-group input-box number">
                            <select class="form-control" name="batch" id="batch" style=" width: 28%;text-align-last: center;  padding:15px; font-size: 15px; border-top: none; border-right: none;border-left: none; border-bottom: 1px solid #9f9f9f;">
                                <option style="font-size: 15px;" value="" disabled selected>Batch Number</option>
                                <option style="font-size: 15px;" value="01">Batch 01</option>
                                <option style="font-size: 15px;" value="02">Batch 02</option>
                                <option style="font-size: 15px;" value="03">Batch 03</option>
                                <option style="font-size: 15px;" value="04">Batch 04</option>
                                <option style="font-size: 15px;" value="05">Batch 05</option>
                                <option style="font-size: 15px;" value="06">Batch 06</option>
                            </select>
                        </div>
                        <div class="form-group input-box StudentID">
                            <input class="form-control" name="studentid" id="studentid" type="text" placeholder="Student ID">
                        </div>
                        <div class="form-group input-box email">
                            <input class="form-control" name="email" id="email" type="email" placeholder="Email Address">
                        </div>
                        <div class="form-group input-box password">
                            <input class="form-control" name="password" id="password" type="password" placeholder="Password">
                        </div>
                        <div class="form-group input-box very-password">
                            <input class="form-control" name="password2" id="password" type="password" placeholder="Verify Password">
                        </div>

                        <div class="buttons-set">
                            <a href="#" name="registerbtn" onclick="document.forms['userreg'].submit();" title="registerbtn" class="bnt bnt-theme text-regular text-uppercase">REGISTER</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End content wrapper-->
<?php include('footer.php')?>