<!--Begin content wrapper-->
<div class="content-wrapper">
    <div class="galery-wrapper">
        <div class="container">
            <div class="galery-title text-center">
                <h4 class="heading-regular">ALUMNI GALERY</h4>
            </div>
            <div class="galery-content">
                <h4 class="heading-regular">FOLDER GALERY</h4>
                <br>
                <div class="row">
                    <?php if (!empty($folderRecords)): ?>
                        <?php foreach ($folderRecords as $record): ?>
                            <div class=" col-md-4">
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
            <div class="pagination-wrapper text-center">
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>
<!--End content wrapper-->

