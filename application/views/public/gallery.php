<!--Begin content wrapper-->
<div class="content-wrapper">
    <div class="galery-wrapper">
        <div class="container">
            <div class="galery-title text-center">

            </div>
            <div class="galery-content">
                <h4 class="heading-regular">PHOTO GALERY</h4>
                <br>
                <div class="row">
                    <?php if (!empty($photoRecords)): ?>
                        <?php foreach ($photoRecords as $record): ?>
                            <div class=" col-md-3">
                                <?php if (!is_null($record->image_path)): ?>
                                    <embed src="<?= $record->image_path ?>" alt="" width="200" height="200">
                                    <h4 style="text-align: center"><?= $record->file_name ?></h4>
                                <?php else: ?>
                                    <embed src="<?= base_url('static/images/no_image_found.jpg') ?>" alt="" width="100" height="100">
                                <?php endif; ?>
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