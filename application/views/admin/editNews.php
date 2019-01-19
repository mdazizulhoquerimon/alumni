<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-newspaper-o fa-2x"></i> News
            <small>Edit News</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter News Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" id="updateNews" action="<?php echo base_url() ?>news/updateNews" enctype="multipart/form-data" method="post">
                        <input type="hidden" value="<?=$newsInfo->id  ?>"  name="id" id="newsId" />
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="news_title" style="font-size: 16px;">News Title</label>
                                        <input type="text" class="form-control required" value="<?=$newsInfo->news_title  ?>" id="news_title" name="news_title" maxlength="500">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="news_details" style="font-size: 16px;">News Details</label>
                                        <?php echo form_textarea(array('class' => 'form-control required','name' => 'news_details', 'value' =>$newsInfo->news_details )); ?>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group col-md-4">
                                        <label for="pimage" style="font-size: 16px;">Previous Images</label>
                                        <?php if (!is_null($newsInfo->image_path)):?>
                                            <img src="<?php echo $newsInfo->image_path ?>" alt="" width="97" height="97">
                                        <?php else:?>
                                            <img src="<?=base_url('static/images/no_image_found.jpg')?>" alt="" width="97" height="97">
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <a class="btn btn-primary" href="<?php echo base_url('news/editNewsWithImage/'.$newsInfo->id ); ?>"> Update With Image</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Update" />
                            <a class="btn btn-primary" href="<?php echo base_url(); ?>news/newsListing"> Cancel</a>
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
                <div class="row">
                    <div class="col-md-12">
                        <?php if(isset($upload_error)) { echo $upload_error;  }  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>