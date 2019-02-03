<!--Begin footer wrapper-->
    <div class="footer-wrapper type2">
        <footer class="foooter-container">
            <div class="container">
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12 animated footer-col">
                            <div class="contact-footer">
                                <div class="logo-footer ">
                                    <a href="./homepage-1.html"><img src="<?php echo base_url(); ?>static/images/logo.png" alt=""></a>
                                </div>
                                <div class="contact-desc">
                                    <p class="text-light">CUELSA A Alumni Assoication To build a self-motivated, self-directed and self-sustaining alumni association in Bangladesh</p>
                                </div>
                                <div class="contact-phone-email">
                                    <span class="contact-phone"><a href="#">+8801832751989</a> | <a href="#">+8801303019975 </a> </span>
                                    <span class="contact-email"><a href="#">alumni@cuelsa.edu</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12  col-xs-12 animated footer-col">
                            <div class="links-footer">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <h6 class="heading-bold">USEFULL LINK</h6>
                                        <ul class="list-unstyled no-margin">
                                            <li><a href="http://www.supremecourt.gov.bd">SUPREME COURT BANGLADESH</a></li>
                                            <li><a href="http://cu.ac.bd">UNIVERSITY OF CHITTAGONG</a></li>
                                            <li><a href="http://www.culaw.ac.bd">LAW,CU</a></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="col-sm-6 col-xs-12">
                                        <h6 class="heading-bold">ABOUT US</h6>
                                        <ul class="list-unstyled no-margin">
                                            <li><a href="<?=base_url('common/events');?>" >EVENTS</a></li>
                                            <li><a href="<?=base_url('common/notice');?>" >NOTICE</a></li>
                                            <li><a href="<?=base_url('common/folder_gallery');?>" >GALLERY</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12 animated footer-col">
                            <div class="links-social">
                                <div class="login-dashboard">
                                    <a href="<?=base_url('users/login');?>" class="bg-color-theme text-center text-regular">Login Dashboard</a>
                                </div>
                                <ul class="list-inline text-center">
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom text-center">
                    <p class="copyright text-light">©2018 Chittagong University Ex-LAW Student Association</p>
                </div>
            </div>
        </footer>
    </div>
    <!--End footer wrapper-->
<?php  $latestEvents = $this->event_model->getLatestEvent();?>
<input type="hidden" value="<?=date('Y',strtotime($latestEvents->event_date));?>"id="event_year" />
<input type="hidden" value="<?=date('m',strtotime($latestEvents->event_date));?>"id="event_month" />
<input type="hidden" value="<?=date('d',strtotime($latestEvents->event_date));?>"id="event_day" />
<input type="hidden" value="<?=date('h',strtotime($latestEvents->event_date));?>"id="event_hour" />
<input type="hidden" value="<?=date('i',strtotime($latestEvents->event_date));?>"id="event_min" />
</div>

<script src="<?php echo base_url(); ?>static/js/libs/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/libs/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/libs/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/libs/jquery.meanmenu.js"></script>
<script src="<?php echo base_url(); ?>static/js/libs/jquery.meanmenu.js"></script>
<script src="<?php echo base_url(); ?>static/js/libs/jquery.syotimer.js"></script>
<script src="<?php echo base_url(); ?>static/js/libs/parallax.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/libs/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/custom/main.js"></script>
<script src="<?php echo base_url(); ?>static/js/libs/modernizr.custom.js"></script>
<script>
    jQuery(document).ready(function () {
        $('#time-event').syotimer({
            year: $('#event_year').val(),
            month: $('#event_month').val(),
            day: $('#event_day').val(),
            hour: $('#event_hour').val(),
            minute: $('#event_min').val(),
        });
    });

    $(document).ready(function(){
        $('#image_slider').owlCarousel({
            autoplay:true,
            loop:true,
            items:1,
        });
    });

</script>
</body>
</html>