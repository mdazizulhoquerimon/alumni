<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i> Executive Member Management
            <small>Edit, Delete</small>
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
                        <h3 class="box-title">Executive Member List</h3>
                        <div class="box-tools">
                            <form action="<?php echo base_url() ?>member/executiveMemberListing" method="POST"
                                  id="searchList">
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
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                            <th>#Sl No</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Batch No</th>
                            <th>Designation</th>
                            <th>Active Year</th>
                            <th>Image</th>
                            <th class="text-center">Actions</th>
                            </thead>
                            <tbody>
                            <?php
                            if (!empty($exMemRecords)) {
                                $sl = $this->uri->segment(3, 0);
                                foreach ($exMemRecords as $record) {
                                    ?>
                                    <tr>
                                        <td><?= ++$sl ?></td>
                                        <td><?php echo $record->name ?></td>
                                        <td><?php echo $record->mobile ?></td>
                                        <td><?php echo $record->batchNo ?></td>
                                        <td><?php echo $record->designation ?></td>
                                        <td><?php echo $record->active_year ?></td>
                                        <td>
                                            <?php if (!is_null($record->image_path)): ?>
                                                <img src="<?php echo $record->image_path ?>" alt="" width="97"
                                                     height="60">
                                            <?php else: ?>
                                                <img src="<?= base_url('static/images/no_image_found.jpg') ?>" alt=""
                                                     width="97" height="60">
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-info" href="<?php echo base_url() . 'member/editExecutiveMember/' . $record->ex_mem_id; ?>" title="Edit"><i class="fa fa-pencil"></i></a>
                                            <a class="btn btn-sm btn-danger deleteExMem" href="#" data-exmemid="<?php echo $record->ex_mem_id; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            </tbody>
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
    jQuery(document).ready(function () {
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();
            var link = jQuery(this).get(0).href;
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "member/executiveMemberListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
