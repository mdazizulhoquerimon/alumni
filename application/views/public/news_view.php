<!--Begin content wrapper-->
<div class="content-wrapper">
    <div class="blog-content blog-content-fullwidth">
        <div class="container">
            <div class="account-title text-center" style="padding-top: 130px; padding-bottom: 20px;">
                <h4 class="heading-light">NEWS</h4>
            </div>
            <div class="blog-post-content full-width">
                <!--Blog Post-->
                <div class="blog-post">
                    <div class="area-img">
                        <img class="img-responsive img-rounded" src="<?=base_url('uploads/news_image/').$newsDetails->file_name; ?>" alt="">
                        <div class="blog-text">
                            <div class="category">
<!--                                <a href="#" class="bnt text-regular">Community</a>-->
                            </div>
                            <div class="article-title">
                                <h2 class="text-regular text-capitalize" style="color: white;"><?=$newsDetails->news_title?></h2>
                            </div>
                        </div>
                        <div class="area-content">

                            <div class="desc">
                                <p><?=$newsDetails->news_details?></p>
                            </div>
                            <div class="stats">
                                <span class="clock">
                                    <span class="icon clock-icon"></span>
                                    <span class="text-center text-light"><?= date('d M Y', strtotime($newsDetails->published_on)); ?></span>
                                </span>
<!--                                <span class="comment">-->
<!--                                    <span class="icon comment-icon"></span>-->
<!--                                    <span class="text-center text-light">10 Comments</span>-->
<!--                                </span>-->
                                <span class="user">
                                    <span class="icon user-icon"></span>
                                    <span class="text-content text-light">CUELSA Admin</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--Share-->
<!--                    <div class="share">-->
<!--                        <div class="box-share">-->
<!--                            <h4>SHARE THIS STORY</h4>-->
<!--                            <ul>-->
<!--                                <li class="facebook"><a href="#"><span class="hidden">facebook</span></a></li>-->
<!--                                <li class="twitter"><a href="#"><span class="hidden">twitter</span></a></li>-->
<!--                                <li class="google"><a href="#"><span class="hidden">google</span></a></li>-->
<!---->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!--comments-->
<!--                    <div class="comments">-->
<!--                        <div class="box-comments">-->
<!--                            <span class="note-comments text-regular">2 Comments Found</span>-->
<!--                            <ul class="list-comments">-->
<!--                                <li>-->
<!--                                    <span class="user-avatar"><img src="images/avatar-user1.png" alt=""></span>-->
<!--                                    <div class="user-comments">-->
<!--                                        <h4 class="heading-regular"> Albert Carroll</h4>-->
<!--                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram. Qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>-->
<!--                                        <a href="#" class="reply">reply</a>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <span class="user-avatar"><img src="images/avatar-user2.png" alt=""></span>-->
<!--                                    <div class="user-comments">-->
<!--                                        <h4 class="heading-regular"> Sandra Porter</h4>-->
<!--                                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram. Qui sequitur.</p>-->
<!--                                        <a href="#" class="reply">reply</a>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!--write comments-->
<!--                    <div class="write-comments">-->
<!--                        <div class="box-comments">-->
<!--                            <div class="title-write">-->
<!--                                <h4 class="heading-regular">Write Comment</h4>-->
<!--                            </div>-->
<!--                            <form action="#">-->
<!--                                <div class="input-box your-comment">-->
<!--                                    <textarea placeholder="Your Comment" cols="1" rows="1"></textarea>-->
<!--                                </div>-->
<!--                                <div class="input-box email">-->
<!--                                    <input type="text" placeholder="Email Address">-->
<!--                                </div>-->
<!--                                <div class="input-box password">-->
<!--                                    <input type="text" placeholder="Password">-->
<!--                                </div>-->
<!--                                <div class="buttons-set">-->
<!--                                    <a href="#"  title="Log In" class="bnt bnt-theme text-regular text-uppercase">POST COMMENT</a>-->
<!--                                </div>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->

                </div>
            </div>
        </div>
    </div>
    <!--End content wrapper-->