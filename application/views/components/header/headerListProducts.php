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
                        T??m <span>180+</span> c???a h??ng
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
                        <span>Mi???n ph?? ?????i tr??? 15 ng??y</span>
                    </div>
                </div>
                <div class="header_navbar-info">
                    <div class="header_navbar-info-search">
                        <form method="GET" autocomplete="off" action="<?php echo base_url('search'); ?>">
                            <input value required autocomplete="off" type="text" name="keyword"
                                placeholder="C???n t??m ??o kho??c, ??o polo..." />
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
                    <a href="<?php echo base_url('logout'); ?>" class="logout">????ng xu???t</a>
                    <?php } else {?>
                    <a href="<?php echo base_url('register'); ?>" class="header_navbar-info-item">????ng k??</a>
                    <div class="header_navbar-info-item-separate"></div>
                    <a href="<?php echo base_url('login'); ?>" class="header_navbar-info-item">????ng nh???p</a>
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
                                Mua 2 t???ng 1
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
                                                <a href="">??o</a>
                                            </h2>
                                            <span>
                                                <a href="">??o Thun N???</a>
                                            </span>
                                            <span>
                                                <a href="">??o Thun H???a Ti???t
                                                    <div class="status">hot</div>
                                                </a>
                                            </span>
                                            <span>
                                                <a href="">??o Polo N???
                                                    <div class="new">m???i</div>
                                                </a>
                                            </span>
                                            <span>
                                                <a href="">??o S?? Mi N???</a>
                                            </span>
                                            <span>
                                                <a href="">??o Kho??c N???</a>
                                            </span>
                                            <span>
                                                <a href="">??o Ch???ng N???ng</a>
                                            </span>
                                            <span>
                                                <a href="">??o Len N???</a>
                                            </span>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">Qu???n</a>
                                            </h2>
                                            <span>
                                                <a href="">Qu???n Jean N???</a>
                                            </span>
                                            <span>
                                                <a href="">Qu???n ??u N???</a>
                                            </span>
                                            <span>
                                                <a href="">Qu???n Kaki N???</a>
                                            </span>
                                            <span>
                                                <a href="">Qu???n Short N???</a>
                                            </span>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">V??y n???</a>
                                            </h2>
                                            <span>
                                                <a href="">Ch??n v??y</a>
                                            </span>
                                            <span>
                                                <a href="">V??y Li???n Th??n</a>
                                            </span>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">B??? ????? n???</a>
                                            </h2>
                                            <span>
                                                <a href="">B??? ????? n??? m???c nh??</a>
                                            </span>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h1>
                                                <a href="">N???i b???t</a>
                                            </h1>
                                            <span>
                                                <a href="">?????ng Gi?? 299K</a>
                                            </span>
                                            <span>
                                                <a href="">H??ng M???i V??? Cho N???</a>
                                            </span>
                                            <span>
                                                <a href="">B??n Ch???y Nh???t C???a N???</a>
                                            </span>
                                            <span>
                                                <a href="">Kh??? M??i V?????t Tr???i</a>
                                            </span>
                                            <span>
                                                <a href="">Tho??ng M??t T???i ??a</a>
                                            </span>
                                            <span>
                                                <a href="">Ch???ng UV</a>
                                            </span>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">????? TH??? THAO - ACTIVEWEAR</a>
                                            </h2>
                                            <span>
                                                <a href="">??o Thun</a>
                                            </span>
                                            <span>
                                                <a href="">??o Polo</a>
                                            </span>
                                            <span>
                                                <a href="">B??? ????? Th??? Thao</a>
                                            </span>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">Ph??? ki???n</a>
                                            </h2>
                                            <span>
                                                <a href="">Gi??y n???</a>
                                            </span>
                                            <span>
                                                <a href="">Th???t l??ng n???</a>
                                            </span>
                                            <span>
                                                <a href="">T??i x??ch</a>
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
                            <?php if ($mainCate->name == 'B??? s??u t???p') {?>
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
                                                <a href="">??o Thun H???a Ti???t
                                                    <div class="status">hot</div>
                                                </a>
                                            </span>
                                            <span>
                                                <a href="">??o Polo N???
                                                    <div class="new">m???i</div>
                                                </a>
                                            </span>
                                            <span>
                                                <a href="">??o S?? Mi N???</a>
                                            </span>
                                            <span>
                                                <a href="">??o Kho??c N???</a>
                                            </span>
                                            <span>
                                                <a href="">??o Ch???ng N???ng</a>
                                            </span>
                                            <span>
                                                <a href="">??o Len N???</a>
                                            </span> -->
                                            <?php }}?>
                                        </div>
                                        <!-- <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">Qu???n</a>
                                            </h2>
                                            <?php foreach ($categoryNam as $key => $cateNam) {
            if ($cateNam->cate == 'qu???n') {
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
                                                <a href="">Qu???n Kaki Nam
                                                    <div class="status">sale</div>
                                                </a>
                                            </span>
                                            <span>
                                                <a href="">Qu???n Short N???</a>
                                            </span>
                                            <?php }}?>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">????? m???c trong</a>
                                            </h2>
                                            <span>
                                                <a href="">Qu???n l??t</a>
                                            </span>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">Ph??? ki???n</a>
                                            </h2>
                                            <span>
                                                <a href="">V?? nam</a>
                                            </span>
                                            <span>
                                                <a href="">Gi??y nam</a>
                                            </span>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h1>
                                                <a href="">N???i b???t</a>
                                            </h1>
                                            <span>
                                                <a href="">?????ng Gi?? 299K</a>
                                            </span>
                                            <span>
                                                <a href="">H??ng M???i V??? Cho N???</a>
                                            </span>
                                            <span>
                                                <a href="">B??n Ch???y Nh???t C???a N???</a>
                                            </span>
                                            <span>
                                                <a href="">Kh??? M??i V?????t Tr???i</a>
                                            </span>
                                            <span>
                                                <a href="">Tho??ng M??t T???i ??a</a>
                                            </span>
                                            <span>
                                                <a href="">Ch???ng UV</a>
                                            </span>
                                        </div>
                                        <div class="header-submenu_container-list-cate">
                                            <h2>
                                                <a href="">????? TH??? THAO - ACTIVEWEAR</a>
                                            </h2>
                                            <span>
                                                <a href="">??o Thun</a>
                                            </span>
                                            <span>
                                                <a href="">??o Polo</a>
                                            </span>
                                            <span>
                                                <a href="">B??? ????? Th??? Thao</a>
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
                                Tr??? em
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
                                B??? s??u t???p
                                <div class="underline-menu"></div>
                            </a>
                        </div>
                        <div class="header_navbar-menu-item options">
                            <a href="./listProducts">
                                Tin t???c
                                <div class="underline-menu"></div>
                            </a>
                        </div>
                        <div class="header_navbar-menu-item options">
                            <a href="./listProducts">
                                ?????ng ph???c
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
                                    placeholder="C???n t??m ??o kho??c, ??o polo..." />
                            </div>
                        </form>
                    </div>
                </div>
                <a class="header_navbar-cart" href="<?php echo base_url('cart'); ?>">

                    <div class="header_navbar-cart-icon">
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/cart.svg?1662973448682" />
                        <div class="cart-amount"><?=count($this->cart->contents());?></div>
                    </div>
                    <span class="cart">Gi??? h??ng</span>

                    <!-- <div class="cart-container">
                        <div class="cart-container-list">
                            <img
                                src="https://bizweb.dktcdn.net/100/438/408/themes/863105/assets/blank_cart.svg?1663124131542" />
                            <span class="cart-container-notify">Gi??? h??ng c???a b???n tr???ng</span>
                        </div>
                        <div class="cart-container-option">
                            <a href="">????ng nh???p/????ng k??</a>
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
                    <span>Mua s???m</span>

                </a>
                <a href="<?php echo base_url('category'); ?>" class="header-menu-tablet-items">

                    <div>
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_2.svg?1663769566786"
                            class="none-active">
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_2_active.svg?1663771549970"
                            class="menu-active">
                    </div>
                    <span>Danh m???c</span>

                </a>
                <div class="header-menu-tablet-items">

                    <div>
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_3.svg?1663769566786"
                            class="none-active">
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_3_active.svg?1663771722557"
                            class="menu-active">
                    </div>
                    <span>Tin t???c</span>

                </div>
                <a href="<?php echo base_url('listAllProducts'); ?>" class="header-menu-tablet-items">

                    <div>
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_4.svg?1663769566786"
                            class="none-active">
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_4_active.svg?1663771722557"
                            class="menu-active">
                    </div>
                    <span>C???a h??ng</span>

                </a>
                <?php if ($this->session->userdata('LoggedIn')) {?>
                <a href="<?php echo base_url('user'); ?>" class="header-menu-tablet-items">
                    <div>
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_5.svg?1663769566786"
                            class="none-active">
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_5_active.svg?1663771722557"
                            class="menu-active ">
                    </div>
                    <span>C?? nh??n</span>
                </a>
                <?php } else {?>
                <a href="<?php echo base_url('login'); ?>" class="header-menu-tablet-items">
                    <div>
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_5.svg?1663769566786"
                            class="none-active">
                        <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/nav_mb_ico_5_active.svg?1663771722557"
                            class="menu-active ">
                    </div>
                    <span>C?? nh??n</span>
                </a>
                <?php }?>
            </div>
        </header>