<!--Begin content wrapper-->
<div class="content-wrapper">
    <div class="account-page login text-center">
        <div class="container">
            <div class="account-title">
                <h4 class="heading-light">EVENTS</h4>
            </div>
        </div>
    </div>
    <!--begin upcoming event-->
    <div class="program-upcoming-event">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="area-img">
                        <img class="img-responsive animate zoomIn"
                             src="<?php echo base_url(); ?>static/images/programs-events-img.jpg" alt="">
                        <div id="time-event" class="animated fadeIn"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="area-content">
                        <div class="area-top">
                            <div class="top-section animated lightSpeedIn">
                                <h5 class="heading-light">UPCOMING EVENT</h5>
                                <span class="dates text-white text-uppercase"><?=date('F d,Y',strtotime($latestRecords->event_date));?></span>
                            </div>
                            <h2 class="heading-bold animated rollIn" style="color: white;"><?=$latestRecords->event_title;?>,<?=$latestRecords->event_type;?></h2>
                            <span class="animated fadeIn">
                                <span class="icon map-icon"></span>
                                <span class="text-place text-white"><?=$latestRecords->event_details;?></span>
                            </span>
                        </div>
<!--                        <div class="area-bottom animated zoomInLeft">-->
<!--                            <a href="./event-single.html" class="bnt bnt-theme join-now">Join Now</a>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end upcoming event-->

    <!--begin event calendar-->
    <div class="event-calendar">
        <div class="container">
            <div class="top-section text-center">
                <h4 class="col-md-9">All Alumni Events</h4>
                <div class="col-md-3">
                    <form action="<?php echo base_url() ?>common/events" method="POST" id="searchList">
                        <div class="input-group">
                            <input type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="event-list-content">
                <?php if (!empty($eventRecords)): ?>
                    <?php foreach ($eventRecords as $record): ?>
                        <?php if ($record->event_id != $latestRecords->event_id): ?>
                            <div class="event-list-item">
                                <div class="date-item">
                                    <span class="day text-bold color-theme"><?= date('d', strtotime($record->event_date)) ?></span>
                                    <span class="dates text-gray text-uppercase"><?= date('F', strtotime($record->event_date)) ?></span>
                                    <span class="text-gray text-uppercase"><?= $record->event_type ?></span>
                                </div>
                                <div class="date-desc-wrapper">
                                    <div class="date-desc">
                                        <div class="date-title">
                                            <h4 class="heading-regular">
                                                <a href="#"><?= $record->event_title ?></a>
                                            </h4>
                                        </div>
                                        <div class="place">
                                            <span class="icon map-icon"></span>
                                            <span class="text-place"><?= $record->event_details ?></span>
                                            <!--                                        <a href="#"> View Map</a>-->
                                        </div>
                                    </div>
                                </div>
                                <!--                    <div class="date-links sold-out text-center">-->
                                <!--                        <a href="#" class="text-regular">SOLD OUT</a>-->
                                <!--                    </div>-->
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
<!--                <div class="event-list-item">-->
<!--                    <div class="date-item">-->
<!--                        <span class="day text-bold color-theme">08</span>-->
<!--                        <span class="dates text-gray text-uppercase">SUN</span>-->
<!--                    </div>-->
<!--                    <div class="date-desc-wrapper">-->
<!--                        <div class="date-desc">-->
<!--                            <div class="date-title"><h4 class="heading-regular"><a href="#">Weekend at Sayidan Sierra-->
<!--                                        Camp</a></h4></div>-->
<!--                            <div class="date-excerpt">-->
<!--                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velitesse molestie-->
<!--                                    consequat, vel illum dolore eu feugiat. nulla facilisis at vero eros et accumsan.-->
<!--                                    molestie consequat, vel illum dolore eu.</p>-->
<!--                            </div>-->
<!--                            <div class="place">-->
<!--                                <span class="icon map-icon"></span>-->
<!--                                <span class="text-place">Gondomanan Street 209, California </span>-->
<!--                                <a href="#"> View Map</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="date-links register text-center">-->
<!--                        <a href="#" class="text-regular">REGISTER</a>-->
<!--                        <span class="limit">Limited! 1 seat left</span>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            <div class="pagination-wrapper text-center">
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
    <!--end event calendar-->
</div>
<!--End content wrapper-->
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();
            var link = jQuery(this).get(0).href;
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "common/events/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>