<?php include('header.php')?>

    <!--Begin content wrapper-->
    <div class="content-wrapper">
        <div class="account-page login text-center">
            <div class="container">
                <div class="account-title">
                    <h4 class="heading-light">LOG IN INTO ALUMNI DASHBOARD</h4>
                </div>
                <?php if(isset($_SESSION['success'])) { ?>
                    <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
                <?php } ?>
                <?php if(isset($_SESSION['error'])) { ?>
                    <div class="alert alert-danger"> <?php echo $_SESSION['error']; ?></div>
                <?php } ?>
                <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                <div class="account-content">
                    <form name="loginform" action="login" method="POST">
                        <div class="input-box email">
                            <input name="email" type="email" placeholder="Email Address">
                        </div>
                        <div class="input-box password">
                            <input name="password" type="password" placeholder="Password">
                        </div>
                        <div class="buttons-set">
                            <a href="#"  onclick="document.forms['loginform'].submit();"  title="Log In" class="bnt bnt-theme text-regular text-uppercase">Log In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End content wrapper-->
    <?php include('footer.php')?>