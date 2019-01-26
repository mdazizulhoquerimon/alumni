<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 class="col-md-9">
            <i class="fa fa-image fa-2x"></i> Photo Gallery
            <small>Add Photo</small>
        </h1>
        <div class="col-md-3">
            <form role="form" id="uploadPhoto" action="<?php echo base_url() ?>photo_gallery/uploadMultiplePhotos" enctype="multipart/form-data" method="post">
                <input type="hidden" value="<?= $folder_id;  ?>"  name="folder_id" id="folder_id" />
                <div class="col-md-12">
                    <div class="form-group col-md-8">
                        <label style="font-size: 16px;"><i class="fa fa-upload fa-2x"></i>Upload Into This Folder</label>
                        <input class="form-control" type="file" name="files[]" multiple/>
                    </div>
                    <div class="col-md-4" style="margin-top: 17px;">
                        <br>
                        <input class=" btn btn-primary" type="submit" name="fileSubmit" value="UPLOAD"/>
                    </div>
                </div>
            </form>
        </div>
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
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>photo_gallery/folderListing"><div style="display: block"><i class="fa fa-arrow-left"></i> Back</div> </a>
                    <div class="box-header">
                        <h3 class="box-title">Gallery</h3>
                        <div class="box-tools">
                            <form action="<?php echo base_url('photo_gallery/folderWiseListing/'.$folder_id) ?>" method="POST" id="searchList">
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
                    <br>
                    <div class="box-body no-padding">
                        <?php if(!empty($photoRecords)): ?>
                            <?php foreach($photoRecords as $record):?>
                                <div class=" col-md-2" style="border: 2px solid #0b58a2;border-radius:10px;padding: 5px; margin: 10px;">
                                    <?php if (!is_null($record->image_path)):?>
                                        <embed src="<?= $record->image_path ?>" alt="" width="260" height="270">
                                        <h4 style="text-align: center"><?= $record->file_name ?></h4>
                                    <?php else:?>
                                        <embed src="<?=base_url('static/images/no_image_found.jpg')?>" alt="" width="100" height="100">
                                    <?php endif; ?>
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
            var folder_id = $("#folder_id").val();
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "photo_gallery/folderWiseListing/"+folder_id+"/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
