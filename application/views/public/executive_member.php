<!--Begin content wrapper-->
<div class="content-wrapper">
    <div class="account-page login text-center">
        <div class="container">
            <div class="account-title col-md-12">
                <h4 class="heading-light">
                    EXECUTIVE COMMITTEE
                </h4>

                <div class="box-tools">
                    <form action="<?php echo base_url() ?>common/executive_member" method="POST" id="searchList">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <select class="form-control col-md-4" id="searchText" name="searchText">
                                <option value="0" selected disabled>Select Active Year</option>
                                <option value="2018-2019">2018-2019</option>
                                <option value="2019-2020">2019-2020</option>
                                <option value="2020-2021">2020-2021</option>
                                <option value="2021-2022">2021-2022</option>
                                <option value="2022-2023">2022-2023</option>
                                <option value="2023-2024">2023-2024</option>
                                <option value="2024-2025">2024-2025</option>
                            </select>
                            <div class="input-group-btn col-md-1">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
        <div class="container ">
            <div class="row">
                <?php foreach ($exMemRecords as $records): ?>
                    <?php if ($records->designation == "President"): ?>
                        <div class="row text-center">
                            <div class="">
                                <div class="single-teacher mb-30" >
                                    <div class="teacher-img">
                                        <?php if (!empty($records->file_name)): ?>
                                            <img class="img-responsive img-rounded" src="<?= base_url('uploads/executive_member_image/') . $records->file_name ?>"
                                                 alt="" width="300" height="300">
                                        <?php else: ?>
                                            <img class="img-responsive img-rounded" src="<?= base_url('static/images/no_image_found.jpg') ?>" alt=""
                                                 width="300"
                                                 height="300">
                                        <?php endif; ?>
                                    </div>
                                    <div class="">
                                        <h5 style="font-weight: bold;color: #0b3e6f;"><?= $records->designation; ?></h5>
                                        <h5 style="font-weight: bold;color: #0b3e6f;"><?= $records->name;?><span style="font-size: 14px;">(Batch-<?= $records->batchNo; ?>)</span></h5>
                                        <h6 style="font-weight: bold;color: #0b3e6f;">(Contact-<?= $records->mobile;?>)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="col-md-3" style="border:1px solid #0b58a2;border-radius: 10px;margin-bottom: 5px;padding: 5px; height: 370px;">
                            <div class="single-teacher mb-30">
                                <div class="teacher-img">
                                    <?php if (!empty($records->file_name)): ?>
                                        <img class="img-responsive img-rounded" src="<?= base_url('uploads/executive_member_image/') . $records->file_name ?>"
                                             alt="" width="300" height="300">
                                    <?php else: ?>
                                        <img class="img-responsive img-rounded" src="<?= base_url('static/images/no_image_found.jpg') ?>" alt="" width="300" height="300">
                                    <?php endif; ?>
                                </div>
                                <div class="">
                                    <h5 style="font-weight: bold;color: #0b3e6f;"><?= $records->designation; ?></h5>
                                    <h5 style="font-weight: bold;color: #0b3e6f;"><?= $records->name;?></h5>
                                    <h6 style="font-weight: bold;color: #0b3e6f;"><span style="font-size: 14px;">Batch-<?= $records->batchNo; ?></span>,<?= $records->mobile;?></h6>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="pagination-wrapper text-center">
        <?php echo $this->pagination->create_links(); ?>
    </div>
</div>
<!--End content wrapper-->
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();
            var link = jQuery(this).get(0).href;
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "common/executive_member/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>