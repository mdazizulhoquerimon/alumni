
<!--Begin content wrapper-->
<div class="content-wrapper">
    <div class="account-page login text-center">
        <div class="container">
            <div class="account-title col-md-12">
                <h4 class="heading-light">
                    EXECUTIVE MEMBER
                </h4>

                <div class="box-tools">
                    <form action="<?php echo base_url() ?>common/executive_member" method="POST" id="searchList">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <select class="form-control col-md-4" id="searchText" name="searchText">
                                <option value="0" selected disabled>Select Active Year</option>
                                <option value="2018-2019">2018-2019</option>
                                <option value="2019-2020">2019-2020</option>
                                <option value="2020-2021">2020-2021</option>
                                <option value="2021-2022">2021-2022</option>
                                <option value="2022-2023">2022-2023</option>
                                <option value="2023-2024">2023-2024</option>
                                <option value="2024-2025">2024-2025</option>
                            </select>
                            <div class="input-group-btn col-md-1">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
        <div class="container ">
            <div class="row">
                <?php foreach ($exMemRecords as $records):?>
                    <div class="col-md-3" >
                        <div class="single-teacher mb-30">
                            <div class="teacher-img" >
                                <img src="<?=base_url('uploads/executive_member_image/').$records->file_name ?>" alt="" width="300" height="300">
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
            </div>
        </div>
    </div>
    <div class="pagination-wrapper text-center">
        <?php echo $this->pagination->create_links(); ?>
    </div>
</div>
<!--End content wrapper-->
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();
            var link = jQuery(this).get(0).href;
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "common/executive_member/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>