
<!--Begin content wrapper-->
<div class="content-wrapper">
    <div class="account-page login text-center">
        <div class="container">
            <div class="account-title">
                <h4 class="heading-light">EXECUTIVE MEMBER</h4>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <?php foreach ($allRecords as $records):?>


                    <div class="col-md-3" >
                        <div class="single-teacher mb-30">
                            <div class="teacher-img" >
                                <img src="<?=$records->image_path ?>" alt="teacher" width="300" height="300">
                            </div>
                            <div class="" style="background-color: #1a265c">
                                <h4><?=$records->name;?></h4>
                                <h5><?=$records->designation;?></h5>
                                <div class="teacher-hover">
                                    <ul class="list-inline text-center">
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach;?>
<!--                <div class="row">-->
<!--                    <div class="col-md-4"></div>-->
<!--                    <div class="col-md-3" style="margin-left: 50px;" >-->
<!--                        <div class="single-teacher mb-30">-->
<!--                            <div class="teacher-img" >-->
<!--                                <img src="--><?php //echo base_url(); ?><!--static/images/teacher/1.jpg" alt="teacher">-->
<!--                                <div class="teacher-content" style="background-color: #1a265c">-->
<!--                                    <h3>rose haten</h3>-->
<!--                                    <div class="teacher-hover">-->
<!--                                        <ul class="list-inline text-center">-->
<!--                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>  -->
<!--                </div> -->
<!--                <div class="row">-->
<!--                    <div class="col-md-4"></div>-->
<!--                    <div class="col-md-3" style="margin-left: 50px;" >-->
<!--                        <div class="single-teacher mb-30">-->
<!--                            <div class="teacher-img" >-->
<!--                                <img src="--><?php //echo base_url(); ?><!--static/images/teacher/1.jpg" alt="teacher">-->
<!--                                <div class="teacher-content" style="background-color: #1a265c">-->
<!--                                    <h3>rose haten</h3>-->
<!--                                    <div class="teacher-hover">-->
<!--                                        <ul class="list-inline text-center">-->
<!--                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>  -->
<!--                </div> -->
<!--                <div class="row">-->
<!--                    <div class="col-md-4"></div>-->
<!--                    <div class="col-md-3" style="margin-left: 50px;" >-->
<!--                        <div class="single-teacher mb-30">-->
<!--                            <div class="teacher-img" >-->
<!--                                <img src="--><?php //echo base_url(); ?><!--static/images/teacher/1.jpg" alt="teacher">-->
<!--                                <div class="teacher-content" style="background-color: #1a265c">-->
<!--                                    <h3>rose haten</h3>-->
<!--                                    <div class="teacher-hover">-->
<!--                                        <ul class="list-inline text-center">-->
<!--                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>  -->
<!--                </div> -->
<!--                <div class="row">-->
<!--                    <div class="col-md-4"></div>-->
<!--                    <div class="col-md-3" style="margin-left: 50px;" >-->
<!--                        <div class="single-teacher mb-30">-->
<!--                            <div class="teacher-img" >-->
<!--                                <img src="--><?php //echo base_url(); ?><!--static/images/teacher/1.jpg" alt="teacher">-->
<!--                                <div class="teacher-content" style="background-color: #1a265c">-->
<!--                                    <h3>rose haten</h3>-->
<!--                                    <div class="teacher-hover">-->
<!--                                        <ul class="list-inline text-center">-->
<!--                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>  -->
<!--                </div>           -->
            </div>
        </div>
    </div>
</div>
<!--End content wrapper-->
