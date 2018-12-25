<?php include('header.php')?>
    <!--Begin content wrapper-->
    <div class="content-wrapper">
        <div class="account-page register text-center">
            <div class="container" style="margin-top: 40px;">
                <div class="account-title">
                    <h4 class="heading-light">LOG IN INTO ALUMNI DASHBOARD</h4>
                </div>
                <div class="account-content">
                    <form action="#">
                        <div class="input-box fullname">
                            <input type="text" placeholder="Full Name">
                        </div>
                        <div  class="input-box number">

                            <select style=" width: 28%;text-align-last: center;  padding:15px; font-size: 15px; border-top: none; border-right: none;border-left: none; border-bottom: 1px solid #9f9f9f;">
                                <option style="font-size: 15px;" value="" disabled selected>Batch Number</option>
                                <option style="font-size: 15px;" value="">Batch 01</option>
                                <option style="font-size: 15px;" value="">Batch 02</option>
                                <option style="font-size: 15px;" value="">Batch 03</option>
                                <option style="font-size: 15px;" value="">Batch 04</option>
                                <option style="font-size: 15px;" value="">Batch 05</option>
                                <option style="font-size: 15px;" value="">Batch 06</option>
                            </select>
                        </div>
                        <div class="input-box StudentID">
                            <input type="text" placeholder="Student ID">
                        </div>
                        <div class="input-box email">
                            <input type="text" placeholder="Email Address">
                        </div>
                        <div class="input-box password">
                            <input type="text" placeholder="Password">
                        </div>
                        <div class="input-box very-password">
                            <input type="text" placeholder="Verify Password">
                        </div>

                        <div class="buttons-set">
                            <a href="#"  title="REGISTER" class="bnt bnt-theme text-regular text-uppercase">REGISTER</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End content wrapper-->
<?php include('footer.php')?>