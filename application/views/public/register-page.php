<?php include('header.php')?>
    <!--Begin content wrapper-->
    <div class="content-wrapper">
        <div class="account-page login text-center">
            <div class="container">
                <div class="account-title">
                    <h4 class="heading-light">ALUMNI REGISTRATION</h4>
                </div>
                <?php if(isset($_SESSION['success'])) { ?>
                    <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
                <?php } ?>
                <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                <div class="account-content">
                    <form name="userreg" action="register" method="POST">
                        <div class="input-box fullname">
                            <input name="fullname" id="fullname" type="text" placeholder="Full Name">
                        </div>
                        <div class="input-box number">
                            <select name="batch" id="batch" style="text-align-last: center;color:black;">
                                <option style="font-size: 15px;" value="" disabled selected>Batch Number</option>
                                <option style="font-size: 15px;" value="01">Batch 01</option>
                                <option style="font-size: 15px;" value="02">Batch 02</option>
                                <option style="font-size: 15px;" value="03">Batch 03</option>
                                <option style="font-size: 15px;" value="04">Batch 04</option>
                                <option style="font-size: 15px;" value="05">Batch 05</option>
                                <option style="font-size: 15px;" value="06">Batch 06</option>
                            </select>
                        </div>
                        <div class="input-box StudentID">
                            <input name="studentid" id="studentid" type="text" placeholder="Student ID">
                        </div>
                        <div class="input-box email">
                            <input name="email" id="email" type="email" placeholder="Email Address">
                        </div>
                        <div class="input-box password">
                            <input name="password" id="password" type="password" placeholder="Password">
                        </div>
                        <div class="input-box very-password">
                            <input name="password2" id="password" type="password" placeholder="Verify Password">
                        </div>

                        <div class="buttons-set">
                            <a href="#" name="registerbtn" onclick="document.forms['userreg'].submit();"  title="REGISTER" class="bnt bnt-theme text-regular text-uppercase">REGISTER</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End content wrapper-->
<?php include('footer.php')?>