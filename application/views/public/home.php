<!--Begin content wrapper-->
<div class="content-wrapper">
    <!--begin slider-->
    <div class="container">
        <div class="slider-hero">
            <div class="owl-carousel" id="image_slider">
                <div class="item">
                    <img src="<?php echo base_url(); ?>static/images/slider3.jpg" alt="">
                </div>
                <div class="item">
                    <img src="<?php echo base_url(); ?>static/images/slider1.jpg" alt="">
                </div>
                <div class="item">
                    <img src="<?php echo base_url(); ?>static/images/slider2.jpg" alt="">
                </div>
                <div class="item">
                    <img src="<?php echo base_url(); ?>static/images/slider4.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--end slider-->

    <!--begin upcoming event-->
    <div class="container">
        <div class="upcoming-event">
            <div class="container">
                <div class="row">
                    <div class="area-img col-md-5 col-sm-12 col-xs-12">
                        <img class="img-responsive animated zoomIn"
                             src="<?php echo base_url(); ?>static/images/even-img.jpg" alt="">
                    </div>
                    <div class="area-content col-md-7 col-sm-12 col-xs-12">
                        <div class="area-top">
                            <div class="row">
                                <div class="col-sm-10 col-xs-9">
                                    <h5 class="heading-light no-margin animated fadeInRight">UPCOMING EVENT</h5>
                                    <h2 class="heading-bold animated fadeInLeft"><?= $latestEvents->event_title; ?>,<?= $latestEvents->event_type; ?></h2>
                                    <span>
                                        <span class="icon map-icon"></span>
                                        <span class="text-place text-light animated fadeInRight"><?= $latestEvents->event_details; ?></span>
                                    </span>
                                </div>
                                <div class="col-sm-2 col-xs-3">
                                    <div class="area-calendar calendar animated slideInRight">
                                        <span class="day text-bold"><?= date('d', strtotime($latestEvents->event_date)) ?></span>
                                        <span class="month text-light"><?= date('F', strtotime($latestEvents->event_date)) ?></span>
                                        <span class="year text-light bg-year"><?=date('Y',strtotime($latestEvents->event_date));?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                        <div class="area-bottom">-->
                        <!--                            <div id="time" class="pull-left animated slideInLeft"></div>-->
                        <!--                            <a href="#" class="bnt bnt-theme join-now pull-right animated fadeIn">Join Now</a>-->
                        <!--                        </div>-->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end upcoming event-->

    <!--begin alumni dashboard-->
    <div class="alumni-dashboard">
        <div class="container">
            <div class="title title-dashboard type1">
                <h3 class="heading-light no-margin"> My Dashboard </h3>
            </div>
            <div class="area-content">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="icon mail-icon"></div>
                        <div class="box-content">
                            <h4 class="heading-regular"> Checking Message </h4>
                            <p class="text-content text-margin text-light ">
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                Mirum est notare quam.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="icon account-icon"></div>
                        <div class="box-content">
                            <h4 class="heading-regular"> Update My Information </h4>
                            <p class="text-content text-margin text-light">
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                Mirum est notare quam.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="icon group-icon"></div>
                        <div class="box-content">
                            <h4 class="heading-regular"> Join with Alumni Forum </h4>
                            <p class="text-content text-margin text-light">
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                Mirum est notare quam.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="icon search-icon"></div>
                        <div class="box-content">
                            <h4 class="heading-regular"> Search Alumni Directory </h4>
                            <p class="text-content text-margin text-light">
                                Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                Mirum est notare quam.
                            </p>
                        </div>
                    </div>
                    <div class="login-dashboard text-center col-sm-12 col-xs-12">
                        <a href="<?=base_url('users/login');?>" class="bnt bnt-theme login-links">LOG IN TO ALUMNI DASHBOARD</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end alumni dashboard-->

    <!--begin block links-->
    <div class="block-links">
        <div class="container">
            <div class="row">
                <div class="block-news col-md-6 col-sm-12 col-xs-12">
                    <div class="column-news">
                        <div class="title-links">
                            <h3 class="heading-regular">Latest News</h3>
                        </div>
                        <div class="post-wrapper">
                            <?php if (!empty($latestNews)): ?>
                                <?php foreach ($latestNews as $records): ?>
                                        <div class="post-item clearfix ">
                                            <div class="image-frame post-photo-wrapper">
                                                <a href="<?=base_url('common/news_view/'.$records->id )?>" > <img src="<?= $records->image_path; ?>" alt=""></a>
                                            </div>
                                            <div class="post-desc-wrapper">
                                                <div class="post-desc">
                                                    <div class="post-title">
                                                        <h6 class="heading-regular"><a href="<?=base_url('common/news_view/'.$records->id )?>" ><?= $records->news_title; ?></a></h6>
                                                    </div>
                                                    <div class="post-excerpt">
                                                        <p><?= $records->news_details; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="view-all"><a href="<?= base_url('common/news'); ?>">View All News</a></div>
                    </div>
                </div>

                <div class="block-event-calendar col-md-6 col-sm-12 col-xs-12">
                    <div class="column-calendar">
                        <div class="title-links">
                            <h3 class="heading-regular">Event Calendar</h3>
                        </div>
                        <div class="content-calendar bg-calendar no-padding">
                            <div class="top-section">
                                <h6 class="heading-light">Year <?= date('Y')?></h6>
                                <span class="icon calendar-icon pull-right"></span>
                            </div>
                            <div class="list-view">
                                <?php if (!empty($eventRecords)): ?>
                                    <?php foreach ($eventRecords as $record): ?>
                                        <?php if ($record->event_id != $latestEvents->event_id): ?>
                                            <div class="view-item">
                                                <div class="date-item">
                                                    <span class="dates text-light"><?= date('D', strtotime($record->event_date)) ?></span>
                                                    <span class="day text-bold color-theme"><?= date('d', strtotime($record->event_date)) ?></span>
                                                    <span class="month text-light"><?= date('M', strtotime($record->event_date)) ?></span>
                                                </div>
                                                <div class="date-desc-wrapper">
                                                    <div class="date-desc">
                                                        <div class="date-title"><h6 class="heading-regular"><?= $record->event_title ?></h6></div>
                                                        <div class="date-excerpt">
                                                            <p>Organizer: CUELSA</p>
                                                        </div>
                                                        <div class="place">
                                                            <span class="icon map-icon"></span>
                                                            <span class="text-place"><?= $record->event_details ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
<!--                                <div class="view-item">-->
<!--                                    <div class="date-item">-->
<!--                                        <span class="dates text-light">MON</span>-->
<!--                                        <span class="day text-bold color-theme">09</span>-->
<!--                                        <span class="month text-light">APR</span>-->
<!--                                    </div>-->
<!--                                    <div class="date-desc-wrapper">-->
<!--                                        <div class="date-desc">-->
<!--                                            <div class="date-title"><h6 class="heading-regular">Weekend at Sayidan-->
<!--                                                    Sierra Camp</h6></div>-->
<!--                                            <div class="date-excerpt">-->
<!--                                                <p>Organizer: Sayidan Black Alumni Association</p>-->
<!--                                            </div>-->
<!--                                            <div class="place">-->
<!--                                                <span class="icon map-icon"></span>-->
<!--                                                <span class="text-place">Gondomanan Street 209, California</span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
                            </div>
                        </div>
                        <div class="view-all"><a href="<?= base_url('common/events'); ?>">View All Events</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end block links-->

    <!--begin instagream-->
    <div class="container">
        <div class="instagream">
            <div class="instagram-feed clearfix">
                <h2 style="text-align: center;margin-bottom: 20px;">Photo Gallery</h2>
                <ul class="list-item no-margin">
                    <li class="no-padding no-margin no-style" style="width: 12%"><a href="#"><img
                                    src="<?php echo base_url(); ?>static/images/ins-img1.jpg" alt=""></a></li>
                    <li class="no-padding no-margin no-style" style="width: 19%"><a href="#"><img
                                    src="<?php echo base_url(); ?>static/images/ins-img2.jpg" alt=""></a></li>
                    <li class="no-padding no-margin no-style" style="width: 19%"><a href="#"><img
                                    src="<?php echo base_url(); ?>static/images/ins-img3.jpg" alt=""></a></li>
                    <li class="no-padding no-margin no-style" style="width: 19%"><a href="#"><img
                                    src="<?php echo base_url(); ?>static/images/ins-img4.jpg" alt=""></a></li>
                    <li class="no-padding no-margin no-style" style="width: 19%"><a href="#"><img
                                    src="<?php echo base_url(); ?>static/images/ins-img5.jpg" alt=""></a></li>
                    <li class="no-padding no-margin no-style" style="width: 12%"><a href="#"><img
                                    src="<?php echo base_url(); ?>static/images/ins-img6.jpg" alt=""></a></li>
                </ul>
                <div class="instagram-feed-user text-center">
                    <div class="user-wrapper">
                        <span class="icon-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></span>
                        <span class="name-user">@CUELSA</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end instagream-->
</div>
<!--End content wrapper-->