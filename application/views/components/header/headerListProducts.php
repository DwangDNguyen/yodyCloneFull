<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$this->config->config['pageTitle']?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <link rel="stylesheet" href="<?php echo base_url('frontend/css/base.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('frontend/css/grid.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('frontend/css/listProducts.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('frontend/css/responsive.css'); ?>" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <script src="https://kit.fontawesome.com/3a8169f1a7.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="announcement">
            <img src="<?php echo base_url('frontend/img/bannertop.webp'); ?>" />
        </div>
        <header class="header header_navbar-res-tablet">
            <div class="header_navbar info">
                <div class="header_navbar-info">
                    <div class="header_navbar-info-item">
                        <div class="header_navbar-info-item-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        Tìm <span>180+</span> cửa hàng
                    </div>
                    <div class="header_navbar-info-item">
                        <div class="header_navbar-info-item-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <span>1800 2086</span>
                        <div class="free">FREE</div>
                    </div>
                    <div class="header_navbar-info-item">
                        <div class="header_navbar-info-item-icon">
                            <img
                                src="https://bizweb.dktcdn.net/100/438/408/themes/863105/assets/flash_tb.svg?1662785446015" />
                        </div>
                        <span>Miễn phí đổi trả 15 ngày</span>
                    </div>
                </div>
                <div class="header_navbar-info">
                    <div class="header_navbar-info-search">
                        <form method="GET" autocomplete="off" action="<?php echo base_url('search'); ?>">
                            <input value required autocomplete="off" type="text" name="keyword"
                                placeholder="Cần tìm áo khoác, áo polo..." />
                            <button type="submit" class="header_navbar-info-search-icon">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                    <?php if ($this->session->userdata('LoggedIn')) {?>
                    <div class="user-icon">
                        <img
                            src="https://bizweb.sapocdn.net/100/438/408/themes/878697/assets/icon-user.svg?1665829959870">
                    </div>
                    <a href="<?php echo base_url('user'); ?>"
                        class="username"><?php echo $this->session->userdata('LoggedIn')['username']; ?></a>
                    <div class="header_navbar-info-item-separate"></div>
                    <a href="<?php echo base_url('logout'); ?>" class="logout">Đăng xuất</a>
                    <?php } else {?>
                    <a href="<?php echo base_url('register'); ?>" class="header_navbar-info-item">Đăng ký</a>
                    <div class="header_navbar-info-item-separate"></div>
                    <a href="<?php echo base_url('login'); ?>" class="header_navbar-info-item">Đăng nhập</a>
                    <?php }?>
                </div>
            </div>
            <div class="header_navbar">
                <div class="header_navbar-menu-option">
                    <div class="header_navbar-logo">
                        <a href="/"><img src="<?php echo base_url('frontend/img/logo.webp'); ?>" /></a>
                    </div>
                    <div class="header_navbar-menu">
                        <div class="header_navbar-menu-item special">
                            <a href="#">
                                Mua 2 tặng 1
                                <div class="underline-menu"></div>
                            </a>
                        </div>
                        <?php foreach ($main_category as $key => $mainCate) {?>
                        <!-- <div class="header_navbar-menu-item options">
                            <a href="<?php echo base_url('category/' . $mainCate->id) ?>">
                                <?php echo $mainCate->name; ?>
                                <div class="underline-menu"></div>
                            </a>
                            <div class="header-submenu">
                                <div class="header-submenu_container">
                                    <div class="header-submenu_container-list">
                                        <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">Áo</a>
                                            </h2>
                                            <span>
                                                <a href="">Áo Thun Nữ</a>
                                            </span>
                                            <span>
                                                <a href="">Áo Thun Họa Tiết
                                                    <div class="status">hot</div>
                                                </a>
                                            </span>
                                            <span>
                                                <a href="">Áo Polo Nữ
                                                    <div class="new">mới</div>
                                                </a>
                                            </span>
                                            <span>
                                                <a href="">Áo Sơ Mi Nữ</a>
                                            </span>
                                            <span>
                                                <a href="">Áo Khoác Nữ</a>
                                            </span>
                                            <span>
                                                <a href="">Áo Chống Nắng</a>
                                            </span>
                                            <span>
                                                <a href="">Áo Len Nữ</a>
                                            </span>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">Quần</a>
                                            </h2>
                                            <span>
                                                <a href="">Quần Jean Nữ</a>
                                            </span>
                                            <span>
                                                <a href="">Quần Âu Nữ</a>
                                            </span>
                                            <span>
                                                <a href="">Quần Kaki Nữ</a>
                                            </span>
                                            <span>
                                                <a href="">Quần Short Nữ</a>
                                            </span>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">Váy nữ</a>
                                            </h2>
                                            <span>
                                                <a href="">Chân váy</a>
                                            </span>
                                            <span>
                                                <a href="">Váy Liền Thân</a>
                                            </span>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">Bộ đồ nữ</a>
                                            </h2>
                                            <span>
                                                <a href="">Bộ đồ nữ mặc nhà</a>
                                            </span>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h1>
                                                <a href="">Nổi bật</a>
                                            </h1>
                                            <span>
                                                <a href="">Đồng Giá 299K</a>
                                            </span>
                                            <span>
                                                <a href="">Hàng Mới Về Cho Nữ</a>
                                            </span>
                                            <span>
                                                <a href="">Bán Chạy Nhất Của Nữ</a>
                                            </span>
                                            <span>
                                                <a href="">Khử Mùi Vượt Trội</a>
                                            </span>
                                            <span>
                                                <a href="">Thoáng Mát Tối Đa</a>
                                            </span>
                                            <span>
                                                <a href="">Chống UV</a>
                                            </span>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">ĐỒ THỂ THAO - ACTIVEWEAR</a>
                                            </h2>
                                            <span>
                                                <a href="">Áo Thun</a>
                                            </span>
                                            <span>
                                                <a href="">Áo Polo</a>
                                            </span>
                                            <span>
                                                <a href="">Bộ Đồ Thể Thao</a>
                                            </span>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">Phụ kiện</a>
                                            </h2>
                                            <span>
                                                <a href="">Giày nữ</a>
                                            </span>
                                            <span>
                                                <a href="">Thắt lưng nữ</a>
                                            </span>
                                            <span>
                                                <a href="">Túi xách</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="header-submenu_container-img">
                                        <img src="<?php echo base_url('frontend/img/link_image_2_1.webp'); ?>" />
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="header_navbar-menu-item options">
                            <?php if ($mainCate->name == 'Bộ sưu tập') {?>
                            <a href="<?php echo base_url('listAllProducts'); ?>">
                                <?php echo $mainCate->name; ?>
                                <div class="underline-menu"></div>
                            </a>
                            <?php } else {?>
                            <a href="#">
                                <?php echo $mainCate->name; ?>
                                <div class="underline-menu"></div>
                            </a>
                            <?php }?>
                            <?php if ($mainCate->status == 1) {?>
                            <div class="header-submenu">
                                <div class="header-submenu_container">
                                    <div class="header-submenu_container-list">
                                        <?php foreach ($title_category as $key => $title) {
    if ($title->main_category_id === $mainCate->main_categories_id) {
        ?>
                                        <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href=""><?php echo $title->name; ?></a>
                                            </h2>
                                            <?php foreach ($categoryNam as $key => $cateNam) {
            if ($cateNam->cate == $title->name && $cateNam->main_categories_id == $mainCate->main_categories_id) {
                ?>
                                            <span>
                                                <input type="hidden" id="<?php echo $cateNam->slug; ?>" name="cate_slug"
                                                    class="cate_slug" value="<?php echo $cateNam->slug; ?>">

                                                <label for="<?php echo $cateNam->slug; ?>">
                                                    <a href="<?php echo base_url('category/' . $cateNam->slug) ?>">
                                                        <?php echo $cateNam->name; ?> <?php echo $mainCate->name; ?>
                                                        <?php if ($cateNam->state == 'HOT') {?>
                                                        <div class="status"><?php echo $cateNam->state; ?></div>
                                                        <?php }?>
                                                        <?php if ($cateNam->state == 'NEW') {?>
                                                        <div class="new"><?php echo $cateNam->state; ?></div>
                                                        <?php }?>
                                                    </a>
                                                </label>

                                            </span>
                                            <!-- <span>
                                                <a href="">Áo Thun Họa Tiết
                                                    <div class="status">hot</div>
                                                </a>
                                            </span>
                                            <span>
                                                <a href="">Áo Polo Nữ
                                                    <div class="new">mới</div>
                                                </a>
                                            </span>
                                            <span>
                                                <a href="">Áo Sơ Mi Nữ</a>
                                            </span>
                                            <span>
                                                <a href="">Áo Khoác Nữ</a>
                                            </span>
                                            <span>
                                                <a href="">Áo Chống Nắng</a>
                                            </span>
                                            <span>
                                                <a href="">Áo Len Nữ</a>
                                            </span> -->
                                            <?php }}?>
                                        </div>
                                        <!-- <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">Quần</a>
                                            </h2>
                                            <?php foreach ($categoryNam as $key => $cateNam) {
            if ($cateNam->cate == 'quần') {
                ?>
                                            <span>
                                                <a href="">
                                                    <?php echo $cateNam->name; ?> NAM
                                                    <?php if ($cateNam->state == 'HOT') {?>
                                                    <div class="status"><?php echo $cateNam->state; ?></div>
                                                    <?php }?>
                                                    <?php if ($cateNam->state == 'NEW') {?>
                                                    <div class="new"><?php echo $cateNam->state; ?></div>
                                                    <?php }?>
                                                </a>
                                            </span>
                                            <span>
                                                <a href="">Quần Kaki Nam
                                                    <div class="status">sale</div>
                                                </a>
                                            </span>
                                            <span>
                                                <a href="">Quần Short Nữ</a>
                                            </span>
                                            <?php }}?>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">Đồ mặc trong</a>
                                            </h2>
                                            <span>
                                                <a href="">Quần lót</a>
                                            </span>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">Phụ kiện</a>
                                            </h2>
                                            <span>
                                                <a href="">Ví nam</a>
                                            </span>
                                            <span>
                                                <a href="">Giày nam</a>
                                            </span>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h1>
                                                <a href="">Nổi bật</a>
                                            </h1>
                                            <span>
                                                <a href="">Đồng Giá 299K</a>
                                            </span>
                                            <span>
                                                <a href="">Hàng Mới Về Cho Nữ</a>
                                            </span>
                                            <span>
                                                <a href="">Bán Chạy Nhất Của Nữ</a>
                                            </span>
                                            <span>
                                                <a href="">Khử Mùi Vượt Trội</a>
                                            </span>
                                            <span>
                                                <a href="">Thoáng Mát Tối Đa</a>
                                            </span>
                                            <span>
                                                <a href="">Chống UV</a>
                                            </span>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">ĐỒ THỂ THAO - ACTIVEWEAR</a>
                                            </h2>
                                            <span>
                                                <a href="">Áo Thun</a>
                                            </span>
                                            <span>
                                                <a href="">Áo Polo</a>
                                            </span>
                                            <span>
                                                <a href="">Bộ Đồ Thể Thao</a>
                                            </span>
                                        </div> -->
                                        <?php }}?>
                                    </div>
                                    <div class="header-submenu_container-img">
                                        <img src="<?php echo base_url('frontend/img/' . $mainCate->image); ?>" />
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <!-- <div class="header_navbar-menu-item options">
                            <a href="./listProducts">
                                Trẻ em
                                <div class="underline-menu"></div>
                            </a>
                        </div>
                        <div class="header_navbar-menu-item options">
                            <a href="./listProducts">
                                Polo yody
                                <div class="underline-menu"></div>
                            </a>
                        </div>
                        <div class="header_navbar-menu-item options">
                            <a href="./listProducts">
                                Bộ sưu tập
                                <div class="underline-menu"></div>
                            </a>
                        </div>
                        <div class="header_navbar-menu-item options">
                            <a href="./listProducts">
                                Tin tức
                                <div class="underline-menu"></div>
                            </a>
                        </div>
                        <div class="header_navbar-menu-item options">
                            <a href="./listProducts">
                                Đồng phục
                                <div class="underline-menu"></div>
                            </a>
                        </div> -->
                        <?php }?>
                    </div>
                    <div class="search-tablet">
                        <form class="search-res" method="GET" autocomplete="off"
                            action="<?php echo base_url('search'); ?>">
                            <div class="search-tablet-icon">
                                <input type="submit" hidden />
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <div class="search-tablet-input">
                                <input value required autocomplete="off" type="text" name="keyword"
                                    placeholder="Cần tìm áo khoác, áo polo..." />
                            </div>
                        </form>
                    </div>
                </div>
                <a class="header_navbar-cart" href="<?php echo base_url('cart'); ?>">

                    <div class="header_navbar-cart-icon">
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/cart.svg?1662973448682" />
                        <div class="cart-amount"><?=count($this->cart->contents());?></div>
                    </div>
                    <span class="cart">Giỏ hàng</span>

                    <!-- <div class="cart-container">
                        <div class="cart-container-list">
                            <img
                                src="https://bizweb.dktcdn.net/100/438/408/themes/863105/assets/blank_cart.svg?1663124131542" />
                            <span class="cart-container-notify">Giỏ hàng của bạn trống</span>
                        </div>
                        <div class="cart-container-option">
                            <a href="">Đăng nhập/Đăng ký</a>
                            <a href="">Mua ngay</a>
                        </div>
                    </div> -->
                </a>
                <div class="mess">
                    <img src="<?php echo base_url('frontend/img/messages.webp'); ?>">
                </div>

            </div>
        </header>
        <header class="header-menu-tablet">
            <div class="header-menu-tablet-list">
                <a href="<?php echo base_url(''); ?>" class="header-menu-tablet-items active-menu-tablet">

                    <div>
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_1.svg?1663770324891"
                            class="none-active">
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_1_active.svg?1663770562646"
                            class="menu-active">
                    </div>
                    <span>Mua sắm</span>

                </a>
                <a href="<?php echo base_url('category'); ?>" class="header-menu-tablet-items">

                    <div>
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_2.svg?1663769566786"
                            class="none-active">
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_2_active.svg?1663771549970"
                            class="menu-active">
                    </div>
                    <span>Danh mục</span>

                </a>
                <div class="header-menu-tablet-items">

                    <div>
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_3.svg?1663769566786"
                            class="none-active">
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_3_active.svg?1663771722557"
                            class="menu-active">
                    </div>
                    <span>Tin tức</span>

                </div>
                <a href="<?php echo base_url('listAllProducts'); ?>" class="header-menu-tablet-items">

                    <div>
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_4.svg?1663769566786"
                            class="none-active">
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_4_active.svg?1663771722557"
                            class="menu-active">
                    </div>
                    <span>Cửa hàng</span>

                </a>
                <?php if ($this->session->userdata('LoggedIn')) {?>
                <a href="<?php echo base_url('user'); ?>" class="header-menu-tablet-items">
                    <div>
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_5.svg?1663769566786"
                            class="none-active">
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_5_active.svg?1663771722557"
                            class="menu-active ">
                    </div>
                    <span>Cá nhân</span>
                </a>
                <?php } else {?>
                <a href="<?php echo base_url('login'); ?>" class="header-menu-tablet-items">
                    <div>
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_5.svg?1663769566786"
                            class="none-active">
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_5_active.svg?1663771722557"
                            class="menu-active ">
                    </div>
                    <span>Cá nhân</span>
                </a>
                <?php }?>
            </div>
        </header>