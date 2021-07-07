<?php
@include "header.php"
?>
<div class="f88-category-title py-4">
    <div class="container">
        <div class="rank-math-breadcrumb">
            <p>
             <span>
                  <span>
                <a href="#" title="">Trang chủ</a>
                »
                <span class="breadcrumb_last" aria-current="page">
                   Game đánh bài đổi thưởng
                </span>
            </span>
             </span>
            </p>
        </div>
    </div>
</div>
<div class="f88-category-content mt-5">
    <div class="container">
        <div class="row ">
            <div class="col-xl-9 col-lg-8 mb-3">
                <div class="f88-category-content-right">
                    <div class="f88-category-content-right-title mb-3">
                        <div class="rank-math-breadcrumb">
                            <p>
             <span>
                  <span>
                <a href="#" title="">Trang chủ</a>
                »
                <span class="breadcrumb_last" aria-current="page">
                   Game đánh bài đổi thưởng
                </span>
            </span>
             </span>
                            </p>
                        </div>
                    </div>
                    <?php
                    for ($x = 0; $x <= 5; $x++) { ?>

                        <div class="f88-category-content-right-description mb-3">
                            <div class="row align-items-center gx-2 ">
                                <div class="col-md-4">
                                    <div class="f88-category-content-right-description-image ">
                                        <a class=" d-block" href="#" title="">
                                            <img class=""  src="assets/images/Blackjack-Strat-EDIT.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="f88-category-content-right-description-content">
                                        <h3 class="f88-category-content-right-description-content-title">
                                            <a href="#" title="">
                                                Blackjack là gì?Hướng dẫn cách chơi bài Blackjack [CHI TIẾT]
                                            </a>
                                        </h3>
                                        <p >
                                            Blackjack vốn là một nhánh trò chơi khác của Poker. Khá nhiều năm về trước, người ta đã khám phá ra được, các ký tự và hình ảnh của trò chơi Blackjack này còn được sử dụng trong Poker. Cho tới nay, Blackjack vẫn được biết đến như một loại trò chơi vô cùng độc....
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                     <div class="f88-category-content-right-seemore text-center mb-4">
                         <a href="#" title="">

                             Xem Thêm

                         </a>
                     </div>
                    <div class="f88-category-content-right-download">
                        <h2 class="f88-category-content-right-download-title">
                            Game bài đổi thưởng uy tín – Tải game bài đổi thưởng
                        </h2>
                    </div>
                </div>

            </div>
            <?php
                include 'components/sidebar.php';
            ?>
        </div>

    </div>

</div>
<?php
@include "footer.php"
?>
