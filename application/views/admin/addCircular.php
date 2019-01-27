<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-graduation-cap fa-2x"></i> Circular
            <small>Add Circular</small>
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
                    <form role="form" id="addCircular" action="<?php echo base_url() ?>career/addNewCircular"  method="post">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="career_title" style="font-size: 16px;">Career Title</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('career_title'); ?>" id="career_title" name="career_title" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company_name" style="font-size: 16px;">Company Name</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('company_name'); ?>" id="company_name" name="company_name" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="location" style="font-size: 16px;">Location</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('location'); ?>" id="location" name="location" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="education_requirement" style="font-size: 16px;">Education Requirement</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('education_requirement'); ?>" id="education_requirement" name="education_requirement">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="experience" style="font-size: 16px;">Experience</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('experience'); ?>" id="experience" name="experience">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="deadline_date" style="font-size: 16px;">Deadline</label>
                                            <input type="text" class="form-control required" value="<?php echo set_value('deadline_date'); ?>" id="deadline_date" name="deadline_date">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="job_link" style="font-size: 16px;">Job Link</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('job_link'); ?>" id="job_link" name="job_link" placeholder="If Any">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="job_description" style="font-size: 16px;">Job Description</label>
                                        <textarea  class="form-control " name="job_description" id="job_description" cols="30" rows="2"  placeholder="If Any"><?= set_value('job_description'); ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Add" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                $this->load->helper('form');
                $error = $this->session->flashdata('error');
                if($error)
                {
                    ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php } ?>
                <?php
                $success = $this->session->flashdata('success');
                if($success)
                {
                    ?>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php } ?>

                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>