<?php
@include "header.php"
?>
<div class="f88-main-topbet mb-3">
   <div class="container">
              <h2 class="f88-main-topbet-title text-center ">
                  Top  nhà cái
              </h2>
   </div>
</div>
<div class="f88-main-bet pb-5">
    <div class="container">
        <div class="mb-lg-5 mb-4">
            <?php
            for ($x = 0; $x <= 5; $x++) { ?>
                <div class="f88-main-bet-description ">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-3 text-center mb-2 mb-lg-0">
                            <div class="f88-main-bet-description-icongame">
                                <div class="f88-main-bet-description-icongame_image text-center">
                                    <img  src="assets/images/m88-logo-thaicasinohub.jpg" alt="">
                                </div>
                                <div class="f88-main-bet-description-number">
                                    1
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-2 mb-lg-0">
                            <div class="f88-main-bet-description-wraptitle text-center">
                                <p class="f88-main-bet-description-wraptitle_title mb-1">
                                    M88
                                </p>
                                <p class="f88-main-bet-description-wraptitle_content">
                                    Thưởng 150% lên tới 3,488,000đ cho thành viên mới.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mb-2 mb-lg-0">
                            <div class="f88-main-bet-description-voting">
                                <div class="f88-main-bet-description-voting-star d-flex align-items-center justify-content-center">
                                    <?php echo svg('star-solid','','18') ?>
                                    <?php echo svg('star-solid','','18') ?>
                                    <?php echo svg('star-solid','','18') ?>
                                    <?php echo svg('star-solid','','18') ?>
                                    <?php echo svg('star-half-alt-solid','','18') ?>
                                    <span>5.0</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-2 mb-lg-0">
                            <div class="f88-main-bet-description_btn text-center">
                                <a class="f88-main-bet-description_btn-blue " href="#" title="">
                                    <?php echo svg('cloud-download-alt-solid','','14') ?>
                                    Cược ngay
                                </a>
                                <a class="f88-main-bet-description_btn-green" href="#" title="">
                                    <?php echo svg('arrow-circle-right-solid','','14') ?>
                                    Xem Review
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
        <div class="f88-main-bet-review mb-lg-5 mb-4">
            <div class="f88-main-bet-review-title mb-3">
                <a class="d-flex align-items-center" href="" title="">
                    <?php echo svg('bars-solid','14','16') ?>
                    <span class="ms-1">REVIEW NHÀ CÁI</span>
                </a>
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-12 col-md-12 col-12">
                    <div class="row   row-cols-md-3   row-cols-2 g-4">
                        <?php
                        for($i = 0; $i <= 5; $i++){
                            include 'components/guess.php';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-xl-3 d-none d-xl-block">
                    <div class="f88-main-bet-review_banner">
                            <p class="mb-3">
                                <img src="assets/images/RCu6WjA.gif" alt="">
                            </p>
                        <p>
                            <img src="assets/images/bsxKs6Y.gif" alt="">
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="f88-main-bet-review mb-lg-5 mb-4">
            <div class="f88-main-bet-review-title mb-3">
                <a class="d-flex align-items-center" href="" title="">
                    <?php echo svg('bars-solid','14','16') ?>
                    <span class="ms-1"> GAME BÀI ĐỔI THƯỞNG</span>
                </a>
            </div>
            <div class="row">
                <div class="col-xl-3 d-none d-xl-block">
                    <div class="f88-main-bet-review_banner">
                        <p class="mb-3">
                            <img src="assets/images/RCu6WjA.gif" alt="">
                        </p>
                        <p>
                            <img src="assets/images/bsxKs6Y.gif" alt="">
                        </p>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-12 col-md-12 col-12">
                    <div class="row   row-cols-md-3   row-cols-2 g-4">
                        <?php
                        for($i = 0; $i <= 5; $i++){
                            include 'components/guess.php';
                        }
                        ?>
                    </div>
                </div>

            </div>

        </div>
        <div class="f88-main-bet-review mb-lg-5 mb-4">
            <div class="f88-main-bet-review-title mb-3">
                <a class="d-flex align-items-center" href="" title="">
                    <?php echo svg('bars-solid','14','16') ?>
                    <span class="ms-1"> SOI CẦU XSMB</span>
                </a>
            </div>
            <div class="row">
                <div class="col-xl-9 col-lg-12 col-md-12 col-12">
                    <div class="row   row-cols-md-3   row-cols-2 g-4">
                        <?php
                        for($i = 0; $i <= 5; $i++){
                            include 'components/guess.php';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-xl-3 d-none d-xl-block">
                    <div class="f88-main-bet-review_banner">
                        <p class="mb-3">
                            <img src="assets/images/RCu6WjA.gif" alt="">
                        </p>
                        <p>
                            <img src="assets/images/bsxKs6Y.gif" alt="">
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="f88-main-bet-review mb-lg-5 mb-4">
            <div class="f88-main-bet-review-title mb-3">
                <a class="d-flex align-items-center" href="" title="">
                    <?php echo svg('bars-solid','14','16') ?>
                    <span class="ms-1"> GIẢI MÃ GIẤC MƠ</span>
                </a>
            </div>
            <div class="row">
                <div class="col-xl-3 d-none d-xl-block">
                    <div class="f88-main-bet-review_banner">
                        <p class="mb-3">
                            <img src="assets/images/RCu6WjA.gif" alt="">
                        </p>
                        <p>
                            <img src="assets/images/bsxKs6Y.gif" alt="">
                        </p>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-12 col-md-12 col-12">
                    <div class="row   row-cols-md-3   row-cols-2 g-4">
                        <?php
                        for($i = 0; $i <= 5; $i++){
                            include 'components/guess.php';
                        }
                        ?>
                    </div>
                </div>

            </div>

        </div>
        <div class="f88-main-bet-content">
            <h2 class="f88-main-bet-content-title">
                Nhà Cái Uy Tín - Top Nhà Cái Hàng Đầu Để Cá Cược 2021
            </h2>
        </div>
    </div>
</div>
<?php
@include "footer.php"
?>
