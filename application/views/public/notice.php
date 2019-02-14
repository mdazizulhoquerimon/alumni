<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="account-title text-center" style="padding-bottom: 20px;">
        <h4 class="heading-light">NOTICE</h4>
    </div>
    <div class="container">
        <div class="container">
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>#Sl No</th>
                        <th>Title</th>
                        <th>Uploaded On</th>
                        <th class="text-center">Download</th>
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
                                <td><a href="<?=base_url('uploads/notice/').$record->file_name; ?>" ><?php echo $record->notice_title ?></a></td>
                                <td><a href="<?=base_url('uploads/notice/').$record->file_name; ?>" ><?php echo date('d-M-Y h:i a',strtotime($record->uploaded_on)) ?></a></td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-info" href="<?php echo base_url().'common/downloadNotice/'.$record->notice_id; ?>" title="Download"><i class="fa fa-download"></i>Download</a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <div class="pagination-wrapper text-center">
        <?php echo $this->pagination->create_links(); ?>
    </div>
</div>
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
