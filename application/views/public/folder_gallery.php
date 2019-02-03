<!--Begin content wrapper-->
<div class="content-wrapper">

    <div class="galery-wrapper">
        <div class="container">
            <div class="account-title text-center" style="padding-top: 130px; padding-bottom: 20px;">
                <h4 class="heading-light">PHOTO GALLERY</h4>
            </div>
            <div class="galery-content">
                <div class="container">
                    <div class="row">
                        <?php if (!empty($folderRecords)): ?>
                            <?php foreach ($folderRecords as $record): ?>
                                <div class=" col-md-3">
                                    <a href="<?= base_url('common/photo_gallery_public/' . $record->folder_id) ?>">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <h3 style="text-align: center"><?= $record->folder_name ?></h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="pagination-wrapper text-center">
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>
<!--End content wrapper-->

