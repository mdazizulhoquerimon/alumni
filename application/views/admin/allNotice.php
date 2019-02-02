<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-upload fa-2x"></i> Notice Management
            <small>Download, Delete</small>
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
            <div class="row">
                <div class="col-md-12">
                    <?php if(isset($upload_error)) { echo $upload_error;  }  ?>
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
                        <h3 class="box-title">Notice List</h3>
                        <div class="box-tools">
                            <form action="<?php echo base_url() ?>notice/noticeListing" method="POST" id="searchList">
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
                                <th>File</th>
                                <th>Uploaded On</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            <?php
                            if(!empty($noticeRecords))
                            {
                                $sl = $this->uri->segment(3,0);
                                foreach($noticeRecords as $record)
                                {
                                    ?>
                                    <tr>
                                        <td><?=++$sl?></td>
                                        <td><?php echo $record->notice_title ?></td>
                                        <td>
                                            <?php if (!is_null($record->notice_path)):?>
                                                <embed src="<?=base_url('uploads/notice/').$record->file_name ?>" alt="" width="300" height="100">
                                            <?php else:?>
                                                <embed src="<?=base_url('static/images/no_image_found.jpg')?>" alt="" width="100" height="100">
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo date('d-M-Y h:i a',strtotime($record->uploaded_on)) ?></td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-info" href="<?php echo base_url().'notice/downloadNotice/'.$record->notice_id; ?>" title="Download"><i class="fa fa-download"></i></a>
                                            <a onclick="return confirm('Are You Sure To Delete??')" class="btn btn-sm btn-danger" href="<?php echo base_url().'notice/deleteNotice/'.$record->notice_id; ?>"title="Delete"><i class="fa fa-trash"></i></a>
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
            jQuery("#searchList").attr("action", baseURL + "notice/noticeListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
