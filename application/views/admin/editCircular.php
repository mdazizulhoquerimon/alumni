<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-graduation-cap fa-2x"></i> Circular
            <small>Edit Circular</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Circular Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" id="addCircular" action="<?php echo base_url() ?>career/updateCircular"  method="post">
                        <input type="hidden" value="<?=$circularInfo->career_id ?>"  name="circular_id" id="circular_id" />
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="career_title" style="font-size: 16px;">Career Title</label>
                                        <input type="text" class="form-control required" value="<?=$circularInfo->career_title ?>" id="career_title" name="career_title" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company_name" style="font-size: 16px;">Company Name</label>
                                        <input type="text" class="form-control required" value="<?=$circularInfo->company_name ?>" id="company_name" name="company_name" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="location" style="font-size: 16px;">Location</label>
                                        <input type="text" class="form-control required" value="<?=$circularInfo->location ?>" id="location" name="location" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="education_requirement" style="font-size: 16px;">Education Requirement</label>
                                        <input type="text" class="form-control required" value="<?=$circularInfo->education_requirement ?>" id="education_requirement" name="education_requirement">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="experience" style="font-size: 16px;">Experience</label>
                                        <input type="text" class="form-control required" value="<?=$circularInfo->experience ?>" id="experience" name="experience">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="deadline_date" style="font-size: 16px;">Deadline</label>
                                        <input type="text" class="form-control required" value="<?=$circularInfo->deadline_date ?>" id="deadline_date" name="deadline_date">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="job_link" style="font-size: 16px;">Job Link</label>
                                        <input type="text" class="form-control required" value="<?=$circularInfo->job_link ?>" id="job_link" name="job_link" placeholder="If Any">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="job_description" style="font-size: 16px;">Job Description</label>
                                        <textarea  class="form-control " name="job_description" id="job_description" cols="30" rows="2"  placeholder="If Any"><?=$circularInfo->job_description ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Update" />
                            <a class="btn btn-primary" href="<?php echo base_url(); ?>career/circularListing"> Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>