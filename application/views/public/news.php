<!--Begin content wrapper-->
<div class="content-wrapper">
    <div class="account-page login text-center">
        <div class="container">
            <div class="account-title">
                <h4 class="heading-light">NEWS</h4>
            </div>
        </div>
    </div>
    <div class="latst-article">
        <div class="container">
            <div class="area-img">
                <img src="<?php echo base_url(); ?>static/images/img-article.jpg" alt="">
            </div>
            <div class="area-content">
                <div class="category animated fadeIn">
                    <a href="#" class="bnt text-regular">Community</a>
                </div>
                <div class="article-title">
                    <h2 class="text-regular text-capitalize animated rollIn">Engaging With the Sayidan Alumni
                        Community</h2>
                </div>
                <div class="stats">
                        <span class="clock">
                            <span class="icon clock-icon-while"></span>
                            <span class="text-center text-white">16 May 2016</span>
                        </span>
                    <span class="comment">
                            <span class="icon comment-icon-while"></span>
                            <span class="text-center text-white">10 Comments</span>
                        </span>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-content">
        <div class="container">
            <div class="row">
                <div class="col-main col-lg-8 col-md-7 col-xs-12">
                    <div class="articles">
                        <?php foreach ($allRecords as $records): ?>
                            <div class="article-item">
                                <div class="area-img">
                                    <img src="<?= $records->image_path; ?>" alt="">
                                </div>
                                <div class="area-content">
                                    <div class="article-left col-lg-2 col-md-3 col-sm-3 col-xs-12 pull-left">
                                        <div class="catetory-title">
                                            <h6 class="text-regular">News</h6>
                                        </div>
                                        <div class="stats">
                                            <span class="icon user-icon"></span>
                                            <span class="text-content text-light">Sayidan Admin</span>
                                        </div>
                                    </div>
                                    <div class="article-right col-lg-10 col-md-9 col-sm-9 col-xs-12 pull-left">
                                        <h3><a href="#"><?= $records->news_title; ?></a></h3>

                                        <div class="stats">
                                            <span class="clock">
                                                <span class="icon clock-icon"></span>
                                                <span class="text-center text-light"><?= $records->published_on; ?></span>
                                            </span>
                                            <span class="comment">
                                                <span class="icon comment-icon"></span>
                                                <span class="text-center text-light">10 Comments</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!--                            <div class="article-item">-->
                        <!--                                <div class="area-img">-->
                        <!--                                    <img src="-->
                        <?php //echo base_url(); ?><!--static/images/article-img-2.jpg" alt="">-->
                        <!--                                </div>-->
                        <!--                                <div class="area-content">-->
                        <!--                                    <div class="article-left col-lg-2 col-md-3 col-sm-3 col-xs-12 pull-left">-->
                        <!--                                        <div class="catetory-title">-->
                        <!--                                            <h6 class="text-regular">News</h6>-->
                        <!--                                        </div>-->
                        <!--                                        <div class="stats">-->
                        <!--                                            <span class="icon user-icon"></span>-->
                        <!--                                            <span class="text-content text-light">Sayidan Admin</span>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                    <div class="article-right col-lg-10 col-md-9 col-sm-9 col-xs-12 pull-left">-->
                        <!--                                        <h3><a href="#">Community Spirit Shines Through</a></h3>-->
                        <!--                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis.</p>-->
                        <!--                                        <div class="stats">-->
                        <!--                                            <span class="clock">-->
                        <!--                                                <span class="icon clock-icon"></span>-->
                        <!--                                                <span class="text-center text-light">16 May 2016</span>-->
                        <!--                                            </span>-->
                        <!--                                            <span class="comment">-->
                        <!--                                                <span class="icon comment-icon"></span>-->
                        <!--                                                <span class="text-center text-light">10 Comments</span>-->
                        <!--                                            </span>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <div class="article-item">-->
                        <!--                                <div class="area-img">-->
                        <!--                                    <img src="-->
                        <?php //echo base_url(); ?><!--static/images/article-img-3.jpg" alt="">-->
                        <!--                                </div>-->
                        <!--                                <div class="area-content">-->
                        <!--                                    <div class="article-left col-lg-2 col-md-3 col-sm-3 col-xs-12 pull-left">-->
                        <!--                                        <div class="catetory-title">-->
                        <!--                                            <h6 class="text-regular">News</h6>-->
                        <!--                                        </div>-->
                        <!--                                        <div class="stats">-->
                        <!--                                            <span class="icon user-icon"></span>-->
                        <!--                                            <span class="text-content text-light">Sayidan Admin</span>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                    <div class="article-right col-lg-10 col-md-9 col-sm-9 col-xs-12 pull-left">-->
                        <!--                                        <h3><a href="#">Bringing Computer Skills to Classrooms</a></h3>-->
                        <!--                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis.</p>-->
                        <!--                                        <div class="stats">-->
                        <!--                                            <span class="clock">-->
                        <!--                                                <span class="icon clock-icon"></span>-->
                        <!--                                                <span class="text-center text-light">16 May 2016</span>-->
                        <!--                                            </span>-->
                        <!--                                            <span class="comment">-->
                        <!--                                                <span class="icon comment-icon"></span>-->
                        <!--                                                <span class="text-center text-light">10 Comments</span>-->
                        <!--                                            </span>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <div class="article-item">
                            <div class="area-content">
                                <div class="article-left col-lg-2 col-md-3 col-sm-3 col-xs-12 pull-left">
                                    <div class="catetory-title">
                                        <h6 class="text-regular">News</h6>
                                    </div>
                                    <div class="stats">
                                        <span class="icon user-icon"></span>
                                        <span class="text-content text-light">Sayidan Admin</span>
                                    </div>
                                </div>
                                <div class="article-right col-lg-10 col-md-9 col-sm-9 col-xs-12 pull-left">
                                    <h3><a href="#">Example Post Without Image</a></h3>
                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                        lectorum. Mirum est notare quam littera gothica quam nunc putamus parum
                                        claram, anteposuerit litterarum formas humanitatis.</p>
                                    <div class="stats">
                                            <span class="clock">
                                                <span class="icon clock-icon"></span>
                                                <span class="text-center text-light">16 May 2016</span>
                                            </span>
                                        <span class="comment">
                                                <span class="icon comment-icon"></span>
                                                <span class="text-center text-light">10 Comments</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="article-item">

                            <div class="area-content">
                                <div class="article-left col-lg-2 col-md-3 col-sm-3 col-xs-12 pull-left">
                                    <div class="catetory-title">
                                        <h6 class="text-regular">News</h6>
                                    </div>
                                    <div class="stats">
                                        <span class="icon user-icon"></span>
                                        <span class="text-content text-light">Sayidan Admin</span>
                                    </div>
                                </div>
                                <div class="article-right col-lg-10 col-md-9 col-sm-9 col-xs-12 pull-left">
                                    <h3><a href="#">“Quam nunc putamus parum claram, anteposuerit litterarum formas
                                            humanitatis ”</a></h3>
                                    <p class="quote-source">- Quote Source</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrapper text-center">
                        <ul class="pagination">
                            <li class="prev"><a href="#">Previous</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="current"><span>3</span></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="next"><a href="#">Next</a></li>
                        </ul>
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
                                    <li>
                                        <div class="area-img">
                                            <img src="<?php echo base_url(); ?>static/images/post-right-1.jpg"
                                                 alt="">
                                        </div>
                                        <div class="area-content">
                                            <h6>Project Teach shows youngsters what’s possible</h6>
                                            <div class="stats">
                                                    <span class="clock">
                                                        <span class="icon clock-icon"></span>
                                                        <span class="text-content text-light">16 May 2016</span>
                                                    </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="area-img">
                                            <img src="<?php echo base_url(); ?>static/images/post-right-2.jpg"
                                                 alt="">
                                        </div>
                                        <div class="area-content">
                                            <h6>Claritas est etiam processus dynamicus, quisasma</h6>
                                            <div class="stats">
                                                    <span class="clock">
                                                        <span class="icon clock-icon"></span>
                                                        <span class="text-content text-light">16 May 2016</span>
                                                    </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="area-img">
                                            <img src="<?php echo base_url(); ?>static/images/post-right-3.jpg"
                                                 alt="">
                                        </div>
                                        <div class="area-content">
                                            <h6>Typi non habent claritatem insitam est usus legentis in</h6>
                                            <div class="stats">
                                                    <span class="clock">
                                                        <span class="icon clock-icon"></span>
                                                        <span class="text-content text-light">16 May 2016</span>
                                                    </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="area-img">
                                            <img src="<?php echo base_url(); ?>static/images/post-right-4.jpg"
                                                 alt="">
                                        </div>
                                        <div class="area-content">
                                            <h6>Dolore eu feugiat nulla facilisis at vero eros et accumsan et i</h6>
                                            <div class="stats">
                                                    <span class="clock">
                                                        <span class="icon clock-icon"></span>
                                                        <span class="text-content text-light">16 May 2016</span>
                                                    </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="area-img">
                                            <img src="<?php echo base_url(); ?>static/images/post-right-5.jpg"
                                                 alt="">
                                        </div>
                                        <div class="area-content">
                                            <h6>Dignissim qui blandit praesent luptatum zzril delenit augue dui</h6>
                                            <div class="stats">
                                                    <span class="clock">
                                                        <span class="icon clock-icon"></span>
                                                        <span class="text-content text-light">16 May 2016</span>
                                                    </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--End content wrapper-->
