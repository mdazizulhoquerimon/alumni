<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="account-title text-center" style="padding-top: 130px; padding-bottom: 20px;">
        <h4 class="heading-light">NOTICE</h4>
    </div>
    <div class="container">
        <div class="container">
            <?php if (!empty($noticeRecords)): ?>
                <?php foreach ($noticeRecords as $record): ?>
                    <div class="col-md-4">
                        <a href="<?=base_url('uploads/notice/').$record->file_name; ?>" >
                        <embed src="<?=base_url('uploads/notice/').$record->file_name; ?>" alt="" width="300" height="100">
                        <h2><?= $record->notice_title ?></h2></a>
                        <a class="btn btn-sm btn-info" href="<?php echo base_url().'common/downloadNotice/'.$record->notice_id; ?>" title="Download"><i class="fa fa-download"></i></a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();
            var link = jQuery(this).get(0).href;
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "common/notice/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
