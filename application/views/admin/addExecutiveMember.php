<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i> Executive Member Management
            <small>Add Executive Member</small>
        </h1>
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Executive Member Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" id="addUser" action="<?php echo base_url() ?>member/addNewExecutiveMember" enctype="multipart/form-data" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Full Name</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('fname'); ?>" id="fname" name="fname" maxlength="128">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Mobile Number</label>
                                        <input type="text" class="form-control required digits" id="mobile" value="<?php echo set_value('mobile'); ?>" name="mobile" maxlength="11">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">Batch No</label>
                                        <select class="form-control required" id="batchNo" name="batchNo">
                                            <option value="0" selected disabled>Select Batch No</option>
                                            <option value="01">Batch 01</option>
                                            <option value="02">Batch 02</option>
                                            <option value="03">Batch 03</option>
                                            <option value="04">Batch 04</option>
                                            <option value="05">Batch 05</option>
                                            <option value="06">Batch 06</option>
                                            <option value="07">Batch 07</option>
                                            <option value="08">Batch 08</option>
                                            <option value="09">Batch 09</option>
                                            <option value="10">Batch 10</option>
                                            <option value="11">Batch 11</option>
                                            <option value="12">Batch 12</option>
                                            <option value="13">Batch 13</option>
                                            <option value="14">Batch 14</option>
                                            <option value="15">Batch 15</option>
                                            <option value="16">Batch 16</option>
                                            <option value="17">Batch 17</option>
                                            <option value="18">Batch 18</option>
                                            <option value="19">Batch 19</option>
                                            <option value="20">Batch 20</option>
                                            <option value="21">Batch 21</option>
                                            <option value="22">Batch 22</option>
                                            <option value="23">Batch 23</option>
                                            <option value="24">Batch 24</option>
                                            <option value="25">Batch 25</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <select class="form-control required" id="designation" name="designation">
                                            <option value="0" selected disabled>Select Designation</option>
                                            <?php
                                            if(!empty($designation))
                                            {
                                                foreach ($designation as $d)
                                                {
                                                    ?>
                                                    <option value="<?php echo $d->designation_id ?>" <?php if($d->designation_id == set_value('designation')) {echo "selected=selected";} ?>><?php echo $d->designation ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group col-md-6">
                                        <label for="image_upload" style="font-size: 16px;">Upload Images</label>
<!--                                        --><?php // echo form_upload(array('name'=>'userfile','id'=>'image_upload',)); ?>
                                        <input id="image_upload" type="file" multiple, name="userfile" />
                                    </div>
                                    <div class="col-md-2" id="image-holder"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Active Year</label>
                                        <select class="form-control required" id="active_year" name="active_year">
                                            <option value="0" selected disabled>Select Active Year</option>
                                            <option value="2018-2019">2018-2019</option>
                                            <option value="2019-2020">2019-2020</option>
                                            <option value="2020-2021">2020-2021</option>
                                            <option value="2021-2022">2021-2022</option>
                                            <option value="2022-2023">2022-2023</option>
                                            <option value="2023-2024">2023-2024</option>
                                            <option value="2024-2025">2024-2025</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>