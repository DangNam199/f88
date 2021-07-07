<?php
@include "header.php"
?>
<div class="f88-category-title py-4 mt-1">
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
<div class="f88-detail-news mt-2 mt-lg-5">
    <div class="container">
        <div class="row ">
            <div class="col-xl-9 col-lg-8 mb-3">
                <h1 class="f88-detail-news-title mb-3">
                    Cách chơi bài tấn đầy đủ nhất cho người tập chơi và cao thủ
                </h1>
                <div class="f88-detail-news-description">
                    <p>
                        <?php echo svg('folder-open-solid','','15') ?>
                        Chuyên mục:
                        <a href="#" title="">
                            Game đánh bài đổi thưởng
                        </a>
                    </p>
                    <p class="my-2">
                        <?php echo svg('tags-solid','','15') ?>
                        Tags:

                    </p>
                    <p>
                        <?php echo svg('clock-solid','','15') ?>
                        Đăng lúc 09/10/2019  bởi Thích Làm Thơ
                    </p>
                    <p>

                    </p>
                </div>
                <p class="f88-detail-news-play my-3 my-md-4 ">
                    Bài tấn sử dụng bộ bài tây 52 lá giống bài Tiến lên, thế nhưng
                    <a href="#" title="">
                        cách chơi bài tấn
                    </a>
                    lại hoàn toàn khác. Với lối chơi đơn giản, dễ hiểu, bài Tấn hứa hẹn sẽ đem đến những giây phút vui vẻ cho bạn và bạn bè.
                </p>
                <blockquote >
                    <p >
                        Game bài đổi thưởng đang là một trong những trò chơi thịnh hành với nhiều thể loại hấp dẫn, hình thức chơi đa dạng. Vậy game đổi thưởng là gì? Đâu là cổng
                        <a href="#" title="">Game Bài Đổi Thưởng Uy Tín</a>
                        nhiều người chơi nhất hiện nay.
                    </p>
                </blockquote>
                <div class="f88-detail-news-posts mt-5  mb-3">
                    <h6 class="f88-detail-news-posts-title mb-1">
                        <a class="d-flex align-items-center" href="" title="">
                            <?php echo svg('bars-solid','14','16') ?>
                            <span class="ms-1">  Bài viết liên quan</span>
                        </a>
                    </h6>
                    <div class="row row-cols-lg-4 row-cols-md-3  row-cols-2 gy-2">
                        <?php
                        for($i = 0; $i <= 5; $i++){
                            include 'components/guess.php';
                        }
                        ?>
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
