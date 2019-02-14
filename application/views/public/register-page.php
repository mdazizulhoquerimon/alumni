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
                            <select class=" required" id="batch" name="batch" style="text-align-last: center;color:#0E2231;">
                                <option value="0" selected disabled >Select Batch No</option>
                                <option value="01">Batch 01</option>
                                <option value="02">Batch 02</option>
                                <option value="03">Batch 03</option>
                                <option value="04">Batch 04</option>
                                <option value="05">Batch 05</option>
                                <option value="06">Batch 06</option>
                                <option value="07">Batch 07</option>
                                <option value="08">Batch 08</option>
                                <option value="09">Batch 09</option>
                                <option value="10">Batch 10</option>
                                <option value="11">Batch 11</option>
                                <option value="12">Batch 12</option>
                                <option value="13">Batch 13</option>
                                <option value="14">Batch 14</option>
                                <option value="15">Batch 15</option>
                                <option value="16">Batch 16</option>
                                <option value="17">Batch 17</option>
                                <option value="18">Batch 18</option>
                                <option value="19">Batch 19</option>
                                <option value="20">Batch 20</option>
                                <option value="21">Batch 21</option>
                                <option value="22">Batch 22</option>
                                <option value="23">Batch 23</option>
                                <option value="24">Batch 24</option>
                                <option value="25">Batch 25</option>
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
                            <a href="<?= base_url('users/profile');?>"  title="Log In" class="bnt bnt-theme text-regular text-uppercase">Log In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End content wrapper-->
<?php include('footer.php')?>