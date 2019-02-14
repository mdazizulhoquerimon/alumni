<!--Begin content wrapper-->
<div class="content-wrapper">
    <div class="career-opportunity">
        <div class="container">
            <div class="top-section">
                <div class="account-title text-center">
                    <h4 class="heading-light">CAREER OPPORTUNITY</h4>
                </div>
                <div class="sellect-career-opportunity">
                    <div class="row">
                        <div class="col-md-offset-5">
                            <form class="navbar-form no-margin" action="<?php echo base_url() ?>common/career" method="POST" id="searchList">
                                <div class="form-group">
                                    <label class="sr-only" for="Search">Search</label>
                                    <input type="search" class="form-control" id="searchText" name="searchText" placeholder="Search">
                                    <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="alumni-directory-content">
                <ul class="list-item">
                    <li class="label-content">
                        <span class="company">Company</span>
                        <span class="position">Job Title</span>
                        <span class="location">Location</span>
                        <span class="rate">Education</span>
                        <span class="role">Experience</span>
                        <span class="applicant">Deadline</span>
                        <span class="apply"></span>
                    </li>
                    <?php if(!empty($cicularRecords)) {
                        $sl = $this->uri->segment(3,0);
                        foreach($cicularRecords as $record)
                        { ?>
                            <li class="box-content">
                                <?php if($record->company_name): ?>
                                    <span class="location"><?=$record->company_name ?></span>
                                <?php else: ?>
                                    <span class="location">N/A</span>
                                <?php endif; ?>
                                <span class="position"><?=$record->career_title ?></span>
                                <?php if($record->location): ?>
                                    <span class="location"><?=$record->location ?></span>
                                <?php else: ?>
                                    <span class="location">N/A</span>
                                <?php endif; ?>
                                <?php if($record->education_requirement): ?>
                                    <span class="rate"><?=$record->education_requirement ?></span>
                                <?php else: ?>
                                    <span class="location">N/A</span>
                                <?php endif; ?>
                                <?php if($record->experience): ?>
                                    <span class="role"><?=$record->experience ?></span>
                                <?php else: ?>
                                    <span class="location">N/A</span>
                                <?php endif; ?>

                                <span class="applicant"><?=date('d-M-Y',strtotime($record->deadline_date)) ?></span>
                                <span class="apply"><a href="<?=$record->job_link ?>" class="bnt bnt-theme">Apply</a></span>
                            </li>
                        <?php }
                    } ?>

                </ul>
            </div>
            <div class="pagination-wrapper text-center">
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
<!--    <!--begin newsletter-->-->
<!--    <div class="newsletter parallax-window newsletter-parallax" data-parallax="scroll">-->
<!--        <div class="container">-->
<!--            <div class="newsletter-wrapper text-center">-->
<!--                <div class="newsletter-title">-->
<!--                    <h2 class="heading-light">Be The First to Get Job Offer</h2>-->
<!--                    <p class="text-white">Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>-->
<!--                </div>-->
<!--                <form name="subscribe-form" target="_blank" class="form-inline">-->
<!--                    <input type="text" class="form-control text-center form-text-light" name="EMAIL" value=""-->
<!--                           placeholder="E-mail Address">-->
<!--                    <button type="submit" class="button bnt-theme">subscribe</button>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <!--end newsletter-->-->

</div>
<!--End content wrapper-->
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();
            var link = jQuery(this).get(0).href;
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "common/career/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>