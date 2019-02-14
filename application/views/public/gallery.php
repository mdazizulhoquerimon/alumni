<!--Begin content wrapper-->
<div class="content-wrapper">
    <div class="galery-wrapper">
        <div class="container">
            <div class="account-title text-center" style="padding-bottom: 20px;">
                <h4 class="heading-light">PHOTO GALLERY</h4>
            </div>
            <div class="galery-content">
                <div class="container">
                    <div class="row">
                        <?php if (!empty($photoRecords)): ?>
                            <?php foreach ($photoRecords as $record): ?>
                                <div class=" col-md-3" style="padding: 10px;">
                                    <?php if (!is_null($record->image_path)): ?>
                                        <a href="<?=base_url('uploads/photogallery/').$folder_name.'/'.$record->file_name ?>" >
                                            <embed class="img-rounded" src="<?=base_url('uploads/photogallery/').$folder_name.'/'.$record->file_name ?>" alt="" width="200" height="200">
                                        </a>
                                    <?php else: ?>
                                        <embed src="<?= base_url('static/images/no_image_found.jpg') ?>" alt="" width="100" height="100">
                                    <?php endif; ?>
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