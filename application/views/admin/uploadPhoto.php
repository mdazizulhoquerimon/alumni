<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-image fa-2x"></i> Photo Gallery
            <small>Upload Photos</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Create Folder & Upload Photo In This Folder</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <form role="form" id="uploadPhoto" action="<?php echo base_url() ?>photo_gallery/createFolder" enctype="multipart/form-data" method="post">
                                    <div class="form-group">
                                        <label for="folder_name" style="font-size: 16px;">Folder Name</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('folder_name'); ?>"
                                               id="folder_name" name="folder_name" maxlength="1000" placeholder="Create Folder First">
                                    </div>
                                    <div class="box-footer">
                                        <input type="submit" class="btn btn-primary" value="Create"/>
                                        <input type="reset" class="btn btn-default" value="Reset"/>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form role="form" id="uploadPhoto" action="<?php echo base_url() ?>photo_gallery/uploadMultiplePhotos" enctype="multipart/form-data" method="post">
                                    <input type="hidden" value="<?= $this->session->flashdata('last_insert_id');  ?>"  name="folder_id" id="folder_id" />
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label style="font-size: 16px;">Upload Into.. <?=$this->session->flashdata('folder_name');?> </label>
                                            <input class="form-control" type="file" name="files[]" multiple/>
                                        </div>
                                        <div class="box-footer">
                                            <input class="btn btn-primary" type="submit" name="fileSubmit" value="UPLOAD"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>

</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>