<div class="col-xl-3 col-lg-4 mb-5">
    <div class="f88-category-content-left">
        <h5 class="f88-category-content-left-title mb-3">
            <a href="#" title="">
                Nhà cái tốt nhất
            </a>
        </h5>
        <div class="mb-4 mb-lg-3">
            <?php
            for ($x = 0; $x <= 5; $x++) { ?>
                <div class="f88-category-content-left-content mb-2">
                    <div class="f88-category-content-left-content_image">
                        <img src="assets/images/W88Partner.0.jpg" alt="">
                    </div>
                    <div class="f88-category-content-left-content_description">
                        <div class="f88-category-content-left-content_description-title">
                            W88
                        </div>
                        <div class="f88-category-content-left-content_description-rating  ">
                            <?php echo svg('star-solid','','16') ?>
                            <b>4.8</b>
                        </div>
                        <p class="f88-category-content-left-content_description-content">
                            Thưởng 50 - 100% khi nạp tiền. Hoàn trả 1,5%
                        </p>
                        <div class="f88-category-content-left-content_description-condition">
                            <span>Điều khoản</span>
                        </div>

                    </div>
                    <div class="f88-category-content-left-content_description-link">
                        <a class="f88-category-content-left-content_description-link-review" href="#" title="">
                            <?php echo svg('info-solid','','13') ?>
                            Xem Review
                        </a>
                        <a class="f88-category-content-left-content_description-link-pink" href="#"title="">
                            Link
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <h6 class="f88-category-content-left-headline mb-1">
            <a class="d-flex align-items-center" href="" title="">
                <?php echo svg('bars-solid','14','16') ?>
                <span class="ms-1"> Soi cầu xsmb</span>
            </a>
        </h6>
        <div class="row row-cols-lg-2 row-cols-md-3  row-cols-2  gy-2 mb-3">
            <?php
            for($i = 0; $i <= 5; $i++){
                include 'components/guess.php';
            }
            ?>
        </div>
        <div class="f88-category-content-left-btn text-center mb-5 mb-md-3">
            <a href="#" title="">
                Xem thêm
            </a>
        </div>
        <h6 class="f88-category-content-left-headline mb-1">
            <a class="d-flex align-items-center" href="" title="">
                <?php echo svg('bars-solid','14','16') ?>
                <span class="ms-1">  Hướng dẫn cá cược</span>
            </a>
        </h6>
        <div class="row row-cols-lg-2 row-cols-md-3  row-cols-2  gy-2 mb-3">
            <?php
            for($i = 0; $i <= 5; $i++){
                include 'components/guess.php';
            }
            ?>
        </div>
        <div class="f88-category-content-left-btn text-center mb-5 mb-md-3">
            <a href="#" title="">
                Xem thêm
            </a>
        </div>
    </div>

</div>
