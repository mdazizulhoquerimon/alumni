<!--Begin content wrapper-->
<div class="content-wrapper">
    <div class="account-page login text-center">
        <div class="container">
            <div class="account-title">
                <h4 class="heading-light">GENERAL MEMBER</h4>
            </div>
            <div class="row">
                <div class="account-content">
                    <form class="form-inline" role="form" action="<?php echo base_url() ?>common/general_member" method="POST" id="searchList">
                        <div class="form-group" style="margin-bottom: 10px;">
                            <label class="sr-only" for="Search">Search</label>
                            <input type="search" class="form-control" id="searchText" name="searchText" placeholder="Search">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="batch">Batch No.</label>
                            <select class="form-control" id="searchText" name="searchText">
                                <option value="0" selected disabled >Select Batch No</option>
                                <option value="01">Batch 01</option>
                                <option value="02">Batch 02</option>
                                <option value="03">Batch 03</option>
                                <option value="04">Batch 04</option>
                                <option value="05">Batch 05</option>
                                <option value="06">Batch 06</option>
                                <option value="07">Batch 07</option>
                                <option value="08">Batch 08</option>
                                <option value="09">Batch 09</option>
                                <option value="10">Batch 10</option>
                                <option value="11">Batch 11</option>
                                <option value="12">Batch 12</option>
                                <option value="13">Batch 13</option>
                                <option value="14">Batch 14</option>
                                <option value="15">Batch 15</option>
                                <option value="16">Batch 16</option>
                                <option value="17">Batch 17</option>
                                <option value="18">Batch 18</option>
                                <option value="19">Batch 19</option>
                                <option value="20">Batch 20</option>
                                <option value="21">Batch 21</option>
                                <option value="22">Batch 22</option>
                                <option value="23">Batch 23</option>
                                <option value="24">Batch 24</option>
                                <option value="25">Batch 25</option>
                            </select>
                        </div>
                        <div class="input-group-btn">
                            <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Start of teacher Area -->
        <div class="teacher-area text-center pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <?php foreach ($memberRecords as $records):?>
                        <div class="col-md-3" >
                            <div class="single-teacher mb-30">
                                <div class="teacher-img" >
                                    <img class="img-responsive img-rounded" src="<?= base_url('static/images/no_image_found.jpg') ?>" alt=""
                                         width="300" height="300">
                                </div>
                                <div class="" style="background-color: #1a265c">
                                    <h4 style="color: white "><?=$records->fullname;?></h4>
                                    <h5 style="color: white"><?=$records->batch;?></h5>
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
<!--                    <div class="col-md-3 col-sm-4 col-xs-12">-->
<!--                        <div class="single-teacher mb-30">-->
<!--                            <div class="teacher-img">-->
<!--                                <img src="--><?php //echo base_url(); ?><!--static/images/teacher/2.jpg" alt="teacher">-->
<!--                                <div class="teacher-content" style="background-color: #1a265c">-->
<!--                                    <h3>Kate Watson</h3>-->
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
<!--                    </div>-->
                </div>
            </div>
        </div>
        <!-- End of teacher Area -->
        <div class="pagination-wrapper text-center">
            <?php echo $this->pagination->create_links(); ?>
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
            jQuery("#searchList").attr("action", baseURL + "common/general_member/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>