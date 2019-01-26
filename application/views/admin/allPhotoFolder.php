<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-image fa-2x"></i> Photo Gallery
            <small>Add Photo, Delete</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <?php
            $this->load->helper('form');
            $error = $this->session->flashdata('error');
            if ($error) {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php } ?>
            <?php
            $success = $this->session->flashdata('success');
            if ($success) {
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
            <div class="row">
                <div class="col-md-12">
                    <?php if (isset($upload_error)) {
                        echo $upload_error;
                    } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <!--                    <a class="btn btn-primary" href="-->
                    <?php //echo base_url(); ?><!--addNew"><i class="fa fa-plus"></i> Add New Batch Admin</a>-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Photo Folder List</h3>
                        <div class="box-tools">
                            <form action="<?php echo base_url() ?>photo_gallery/folderListing/" method="POST" id="searchList">
                                <div class="input-group">
                                    <input type="text" name="searchText" value="<?php echo $searchText; ?>"
                                           class="form-control input-sm pull-right" style="width: 150px;"
                                           placeholder="Search"/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body no-padding">
                        <?php if(!empty($folderRecords)): ?>
                            <?php foreach($folderRecords as $record):?>
                               <div class=" col-md-2">
                                   <a href="<?=base_url('photo_gallery/folderWiseListing/'.$record->folder_id)?>">
                                   <div class="panel panel-default">
                                       <div class="panel-body"><h3 style="text-align: center"><?=$record->folder_name?></h3></div>
                                   </div>
                                   </a>
                               </div>
                            <?php endforeach;?>
                        <?php endif;?>

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
    jQuery(document).ready(function () {
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();
            var link = jQuery(this).get(0).href;
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "photo_gallery/folderListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
