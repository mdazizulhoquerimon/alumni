<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-graduation-cap fa-2x"></i> Circular Management
            <small>Edit, Delete</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
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
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <!--                    <a class="btn btn-primary" href="--><?php //echo base_url(); ?><!--addNew"><i class="fa fa-plus"></i> Add New Batch Admin</a>-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Cicular List</h3>
                        <div class="box-tools">
                            <form action="<?php echo base_url() ?>career/circularListing" method="POST" id="searchList">
                                <div class="input-group">
                                    <input type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>#Sl No</th>
                                <th>Title</th>
                                <th>Company</th>
                                <th>Location</th>
                                <th>Education Requirement</th>
                                <th>Experience</th>
                                <th>Deadline</th>
                                <th>Link</th>
                                <th>Description</th>
                                <th>Created On</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            <?php
                            if(!empty($cicularRecords))
                            {
                                $sl = $this->uri->segment(3,0);
                                foreach($cicularRecords as $record)
                                {
                                    ?>
                                    <tr>
                                        <td><?=++$sl?></td>
                                        <td><?php echo $record->career_title ?></td>
                                        <td><?php echo $record->company_name ?></td>
                                        <td><?php echo $record->location ?></td>
                                        <td><?php echo $record->education_requirement ?></td>
                                        <td><?php echo $record->experience ?></td>
                                        <td><?php echo date('d-M-Y',strtotime($record->deadline_date)) ?></td>
                                        <td><?php echo $record->job_link ?></td>
                                        <td><?php echo $record->job_description ?></td>
                                        <td><?php echo date('d-M-Y h:i a',strtotime($record->createdDtm)) ?></td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-info" href="<?= base_url().'career/editCircular/'.$record->career_id; ?>" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a onclick="return confirm('Are You Sure To Delete??')" class="btn btn-sm btn-danger" href="<?= base_url().'career/deleteCircular/'.$record->career_id; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </table>

                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();
            var link = jQuery(this).get(0).href;
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "career/circularListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
