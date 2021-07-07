<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> f88 </title>
    <!-- Plugin -->
    <link rel="stylesheet" href="assets/plugin/bootstrap/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Flickity -->
    <link rel="stylesheet" href="assets/plugin/flickity/flickity.css">
    <!-- Font -->

</head>

<body>
<?php
/**
 * Function help call file SVG from assets/svg
 */
function svg($name, $width = false, $height = false)
{
    $dir  = 'assets/svg/';
    $path = $dir . $name . '.svg';
    if ($name && file_exists($path)) {
        $svg = file_get_contents($path);
        if ($width) {
            $size = '<svg';
            $new_size = '<svg width="' . $width . 'px"';
            $svg = str_replace($size, $new_size, $svg);
        }
        if ($height) {
            $size = '<svg';
            $new_size = '<svg height="' . $height . 'px"';
            $svg = str_replace($size, $new_size, $svg);
        }
        return $svg;
    }
    return '';
}
?>
<header>
<div class="f88-header py-1">
    <div class="container">
        <div class="f88-header-menu row align-items-center">
            <div class="col-lg-1 col-md-6 col-6">
                <div class="f88-header-menu_logo ">
                    <a href="#" title="">
                        <img src="assets/images/Dangkynhacai247-logo.png" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-9 text-lg-end d-none d-lg-block">
                <div class="f88-header-menu_pc">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="#" title="">
                                Đăng Ký Nhà Cái
                            </a>
                            <ul>
                                <li>
                                    <a href="#" title=""> W88</a>
                                </li>
                                <li>
                                    <a href="#" title=""> W88</a>
                                </li>
                                <li>
                                    <a href="#" title=""> W88</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="">
                                Game đánh bài đổi thưởng
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                GAME ĐỔI THƯỞNG
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                SOI CẦU SXMB
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                GIẢI MÃ GIẤC MƠ
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-6  d-lg-none text-end">
                <div class="header__bars ">
                    <?php echo svg('bars-solid','25') ?>
                </div>
            </div>

            <div class="col-lg-2 col-12 ">
                <div class="f88-header-menu_search mb-xl-0 mb-2">
                    <div class="form d-flex align-items-center">
                        <input type="text" class="form-control" placeholder="Search">
                        <button type="mid">
                            <?php echo svg('search-solid','16','18') ?>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <nav class="menu-mobile d-block d-lg-none">
        <div class="menu-mobile-close">
            <?php echo svg('times-solid','24','24') ?>
        </div>
        <ul>
            <li class="current-menu-item"><a href="">Trang chủ</a></li>
            <li><a href="">Tỷ lệ kèo</a></li>
            <li class="menu-item-has-children">
                <a href="">Soi kèo bóng đá</a>
                <ul>
                    <li><a href="">Soi kèo Ngoại Hạng Anh</a></li>
                    <li><a href="">Soi kèo Ngoại Hạng Anh</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children">
                <a href="">Nhà cái uy tín</a>
                <ul>
                    <li><a href="">Soi kèo Ngoại Hạng Anh</a></li>
                    <li><a href="">Soi kèo Ngoại Hạng Anh</a></li>
                </ul>
            </li>
            <li><a href="">Lịch thi đấu bóng đá</a></li>
            <li>
                <a href="">Dự án</a>

                <ul>
                    <li><a href="">Soi kèo Ngoại Hạng Anh</a></li>
                    <li><a href="">Soi kèo Ngoại Hạng Anh</a></li>
                </ul>
            </li>
            <li><a href="">Blog</a></li>
        </ul>
    </nav>
    <div class="overlay position-absolute"></div>
   
</div>
</header>


</body>

</html>