<!--Begin content wrapper-->
<div class="content-wrapper">
    <div class="account-title text-center" style="padding-top: 130px; padding-bottom: 20px;">
        <h4 class="heading-light">NEWS</h4>
    </div>
    <div class="latst-article">
        <div class="container">
            <div class="area-img">
                <img class="img-responsive img-rounded" src="<?=base_url('uploads/news_image/').$latestNews->file_name; ?>" alt="">
            </div>
            <div class="area-content">
                <div class="category animated fadeIn">
<!--                    <a href="#" class="bnt text-regular">Community</a>-->
                </div>
                <div class="article-title">
                    <h2 class="text-regular text-capitalize animated rollIn" style="color: white;"><a href="<?=base_url('common/news_view/'.$latestNews->id )?>" ><?= $latestNews->news_title; ?></a></h2>
                </div>
                <div class="stats">
                        <span class="clock">
                            <span class="icon clock-icon-while"></span>
                            <span class="text-center text-white"><?= date('d M Y', strtotime($latestNews->published_on)); ?></span>
                        </span>
<!--                    <span class="comment">-->
<!--                            <span class="icon comment-icon-while"></span>-->
<!--                            <span class="text-center text-white">10 Comments</span>-->
<!--                    </span>-->
                </div>
            </div>
        </div>
    </div>
    <div class="blog-content">
        <div class="container">
            <div class="row">
                <div class="col-main col-lg-8 col-md-7 col-xs-12">
                    <div class="articles">
                        <?php if (!empty($allRecords)): ?>
                            <?php foreach ($allRecords as $records): ?>
                                <?php if ($records->id != $latestNews->id): ?>
                                    <div class="article-item">
                                        <div class="area-img">
                                            <img class="img-responsive img-rounded" src="<?=base_url('uploads/news_image/').$records->file_name; ?>" alt="">
                                        </div>
                                        <div class="area-content">
                                            <div class="article-left col-lg-2 col-md-3 col-sm-3 col-xs-12 pull-left">
                                                <div class="catetory-title">
                                                    <h6 class="text-regular">News</h6>
                                                </div>
                                                <div class="stats">
                                                    <span class="icon user-icon"></span>
                                                    <span class="text-content text-light">CUELSA Admin</span>
                                                </div>
                                            </div>
                                            <div class="article-right col-lg-10 col-md-9 col-sm-9 col-xs-12 pull-left">
                                                <h3><a href="<?=base_url('common/news_view/'.$records->id )?>" ><?= $records->news_title; ?></a></h3>
                                                <div class="stats">
                                                    <span class="clock">
                                                        <span class="icon clock-icon"></span>
                                                        <span class="text-center text-light"><?= date('d M Y', strtotime($records->published_on)); ?></span>
                                                    </span>
<!--                                                    <span class="comment">-->
<!--                                                        <span class="icon comment-icon"></span>-->
<!--                                                        <span class="text-center text-light">10 Comments</span>-->
<!--                                                    </span>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="pagination-wrapper text-center">
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                </div>
                <div class="sidebar blog-right col-lg-4 col-md-5 hidden-sm hidden-xs">
                    <div class="block-sidebar">
                        <div class="block-item popurlar-port">
                            <div class="block-title text-center">
                                <h5 class="text-regular text-uppercase">POPULAR POST</h5>
                            </div>
                            <div class="block-content">
                                <ul>
                                    <?php if (!empty($popularNews)): ?>
                                        <?php foreach ($popularNews as $records): ?>
                                            <li>
                                                <div class="area-img">
                                                    <img class="img-responsive img-rounded" src="<?=base_url('uploads/news_image/').$records->file_name; ?>" alt="">
                                                </div>
                                                <div class="area-content">
                                                    <h6><a href="<?=base_url('common/news_view/'.$records->id )?>" ><?= $records->news_title; ?></a></h6>
                                                    <div class="stats">
                                                    <span class="clock">
                                                        <span class="icon clock-icon"></span>
                                                        <span class="text-content text-light"><?= date('d M Y', strtotime($records->published_on)); ?></span>
                                                    </span>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--End content wrapper-->
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();
            var link = jQuery(this).get(0).href;
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "common/news/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>