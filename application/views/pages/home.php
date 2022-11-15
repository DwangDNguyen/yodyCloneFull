<div class="container">
    <div class="modal-overlay"></div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo base_url('frontend/img/slider_1.webp'); ?>" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo base_url('frontend/img/slider_2.webp'); ?>" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo base_url('frontend/img/slider_3.webp'); ?>" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo base_url('frontend/img/slider_4.webp'); ?>" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo base_url('frontend/img/slider_5.webp'); ?>" />
            </div>
        </div>
        <div class="swiper-button-next swiper-button-next1">
            <i class="fa-solid fa-arrow-right"></i>
        </div>
        <div class="swiper-button-prev swiper-button-prev1">
            <i class="fa-solid fa-arrow-left"></i>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="list-service">
        <div class="list-service_items">
            <div class="list-service_items-icon">
                <img src="frontend/img/ser_1.webp">
            </div>
            <div class="list-service_items-desc">
                <p>Miễn phí vận chuyển đơn 0đ </br></p>
                <span>FREESHIP</span> mọi đơn hàng từ 1/9-30/9
            </div>
        </div>
        <div class="list-service_items">
            <div class="list-service_items-icon">
                <img src="frontend/img/ser_2.webp">
            </div>
            <div class="list-service_items-desc">
                <p>Đa dạng hình thức thanh toán </br></p>
                Momo, VNPay, COD
            </div>
        </div>
        <div class="list-service_items">
            <div class="list-service_items-icon">
                <img src="frontend/img/ser_3.webp">
            </div>
            <div class="list-service_items-desc">
                <p>Giao hàng nhanh </br></p>
                Chỉ từ <span>2-5 ngày</span>
            </div>
        </div>
        <div class="list-service_items">
            <div class="list-service_items-icon">
                <img src="frontend/img/ser_4.webp">
            </div>
            <div class="list-service_items-desc">
                <p>Miễn phí ĐỔI, TRẢ </br></p>
                Trong <span>15 ngày</span> tại 180+ điểm bán
            </div>
        </div>
    </div>
    <div class="Featured-category">
        <h1 class="Featured-category-title">
            Danh mục nổi bật
        </h1>
        <div class="tab-container-web">
            <div class="tab-container-items-web tab-container-active-web">
                Nữ
            </div>
            <div class="tab-container-items-web">
                Nam
            </div>
            <div class="tab-container-items-web">
                Trẻ em
            </div>
            <div class="line-web"></div>
        </div>
        <div class="tab-content-web">
            <div class="tab-content-list-web tab-content-active-web">
                <div class="featured-category_list swiper2Web">
                    <div class="swiper-wrapper">
                        <?php foreach ($categoryNam as $key => $cate) {
    if ($cate->main_categories_id == 2) {
        ?>
                        <div class="swiper-slide swiper-slide-category">
                            <div class="featured-category_list-items">
                                <a href="<?php echo base_url('category/' . $cate->slug) ?>">
                                    <div class="featured-category_list-items-img">
                                        <img src="<?php echo base_url('frontend/img/' . $cate->image) ?>">
                                    </div>
                                    <span><?php echo $cate->name ?></span>
                                </a>
                            </div>
                        </div>
                        <?php }}?>
                    </div>
                    <div class="swiper-button-next swiper-button-next2">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <div class="swiper-button-prev swiper-button-prev2">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                </div>
            </div>
            <div class="tab-content-list-web">
                <div class="featured-category_list swiper2Web">
                    <div class="swiper-wrapper">
                        <?php foreach ($categoryNam as $key => $cate) {
    if ($cate->main_categories_id == 1) {
        ?>
                        <div class="swiper-slide swiper-slide-category">
                            <div class="featured-category_list-items">
                                <a href="<?php echo base_url('category/' . $cate->slug) ?>">
                                    <div class="featured-category_list-items-img">
                                        <img src="<?php echo base_url('frontend/img/' . $cate->image) ?>">
                                    </div>
                                    <span><?php echo $cate->name ?></span>
                                </a>
                            </div>
                        </div>
                        <?php }}?>
                    </div>
                    <div class="swiper-button-next swiper-button-next2">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <div class="swiper-button-prev swiper-button-prev2">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                </div>
            </div>
            <div class="tab-content-list-web">
                <div class="featured-category_list swiper2Web">
                    <div class="swiper-wrapper">
                        <?php foreach ($categoryNam as $key => $cate) {
    if ($cate->main_categories_id == 3) {
        ?>
                        <div class="swiper-slide swiper-slide-category">
                            <div class="featured-category_list-items">
                                <a href="<?php echo base_url('category/' . $cate->slug) ?>">
                                    <div class="featured-category_list-items-img">
                                        <img src="<?php echo base_url('frontend/img/' . $cate->image) ?>">
                                    </div>
                                    <span><?php echo $cate->name ?></span>
                                </a>
                            </div>
                        </div>
                        <?php }}?>
                    </div>
                    <div class="swiper-button-next swiper-button-next2">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <div class="swiper-button-prev swiper-button-prev2">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-container">
        <div class="tab-container-items tab-container-active">
            Nữ
        </div>
        <div class="tab-container-items">
            Nam
        </div>
        <div class="tab-container-items">
            Trẻ em
        </div>
        <div class="line"></div>
    </div>
    <div class="tab-content">
        <div class="tab-content-list tab-content-active">
            <div class="featured-category_list swiper2">
                <div class="swiper-wrapper">
                    <?php foreach ($categoryNam as $key => $cate) {
    if ($cate->main_categories_id == 2) {
        ?>
                    <div class="swiper-slide swiper-slide-category">
                        <div class="featured-category_list-items">
                            <a href="<?php echo base_url('category/' . $cate->slug) ?>">
                                <div class="featured-category_list-items-img">
                                    <img src="<?php echo base_url('frontend/img/' . $cate->image) ?>">
                                </div>
                                <span><?php echo $cate->name ?></span>
                            </a>
                        </div>
                    </div>
                    <?php }}?>
                </div>
                <div class="swiper-button-next swiper-button-next2">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
                <div class="swiper-button-prev swiper-button-prev2">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
            </div>
        </div>
        <div class="tab-content-list">
            <div class="featured-category_list swiper2">
                <div class="swiper-wrapper">
                    <?php foreach ($categoryNam as $key => $cate) {
    if ($cate->main_categories_id == 1) {
        ?>
                    <div class="swiper-slide swiper-slide-category">
                        <div class="featured-category_list-items">
                            <a href="<?php echo base_url('category/' . $cate->slug) ?>">
                                <div class="featured-category_list-items-img">
                                    <img src="<?php echo base_url('frontend/img/' . $cate->image) ?>">
                                </div>
                                <span><?php echo $cate->name ?></span>
                            </a>
                        </div>
                    </div>
                    <?php }}?>
                </div>
                <div class="swiper-button-next swiper-button-next2">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
                <div class="swiper-button-prev swiper-button-prev2">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
            </div>
        </div>
        <div class="tab-content-list">
            <div class="featured-category_list swiper2">
                <div class="swiper-wrapper">
                    <?php foreach ($categoryNam as $key => $cate) {
    if ($cate->main_categories_id == 3) {
        ?>
                    <div class="swiper-slide swiper-slide-category">
                        <div class="featured-category_list-items">
                            <a href="<?php echo base_url('category/' . $cate->slug) ?>">
                                <div class="featured-category_list-items-img">
                                    <img src="<?php echo base_url('frontend/img/' . $cate->image) ?>">
                                </div>
                                <span><?php echo $cate->name ?></span>
                            </a>
                        </div>
                    </div>
                    <?php }}?>
                </div>
                <div class="swiper-button-next swiper-button-next2">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
                <div class="swiper-button-prev swiper-button-prev2">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="products-banner">
        <div class="products-banner_items">
            <div class="products-banner_items-title">
                Sản phẩm khác biệt với thị trường
            </div>
            <div class="products-banner_items-container">
                <span class="material">Chất liệu tạo nên</span>
                <div class="products-banner_items-container-attraction">
                    <div>Sức hút thương hiệu</div>
                </div>
                <div class="products-banner_items-container-info">
                    <span>Tất cả Sản phẩm của YODY đều sản xuất tại Việt Nam, bởi người Việt Nam</span>
                    <div class="strikethrough"></div>
                </div>
                <div class="products-banner_items-container-info">
                    <span>Dòng chất liệu tiên tiến: Polo Cafe, Pique mắt chim Coolmax, T-Shirt ISCRA, cotton
                        USA...</span>
                    <div class="strikethrough"></div>
                </div>
                <div class="products-banner_items-container-list-option">
                    <a href="#" class="products-banner_items-container-list-option-card option1">
                        <img src="frontend/img/family.webp">
                        <span>Polo mắt chim</span>
                    </a>
                    <a href="#" class="products-banner_items-container-list-option-card option2">
                        <img src="frontend/img/orange.jpg">
                        <span>Polo cafe</span>
                    </a>
                    <a href="#" class="products-banner_items-container-list-option-card option3">
                        <img src="frontend/img/aophong.webp">
                        <span>Polo coolmax</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="products-banner_items">
            <div class="products-banner_items-title">
                Thương hiệu uy tín được tin tưởng
            </div>
            <div class="products-banner_items-container second">
                <span class="material">BƯỚC CHUYỂN MÌNH MỚI</span>
                <span class="material">CỦA THỜI TRANG</span>
                <div class="border-bottom">
                    <div class="border-new"></div>
                </div>
                <div class="products-banner_items-container-list-option-info">
                    <div class="products-banner_items-container-list-option-info-item">
                        <img src="frontend/img/180.webp">
                        <span>CỬA HÀNG TRÊN TOÀN QUỐC</span>
                    </div>
                    <div class="products-banner_items-container-list-option-info-item">
                        <img src="frontend/img/nha_may.webp">
                        <span>2 NHÀ MÁY</span>
                    </div>
                </div>
                <div class="products-banner_items-container-list-option-info">
                    <div class="products-banner_items-container-list-option-info-item">
                        <img src="frontend/img/van_phong.webp">
                        <span>5 VĂN PHÒNG TRÊN TOÀN QUỐC</span>
                    </div>
                    <div class="products-banner_items-container-list-option-info-item">
                        <img src="frontend/img/nhan_su.webp">
                        <span>4000+ NHÂN SỰ ĐỒNG HÀNH</span>
                    </div>
                </div>
                <div class="products-banner_items-container-list-option-info">
                    <div class="products-banner_items-container-list-option-info-item-last">
                        <img src="frontend/img/the_gioi.webp">
                        <span>MANG THỜI TRANG VIỆT RA NGOÀI THẾ GIỚI, CHINH PHỤC THỊ TRƯỜNG MỸ VÀ THÁI
                            LAN</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-trends">
        Xu hướng tìm kiếm
    </div>
    <div class="swiper-container tabs-buttons">
        <div class="swiper-wrapper tabs-list">
            <div class="swiper-slide tabs">
                <div class="">ÁO KHOÁC 3C PLUS</div>
            </div>
            <div class="swiper-slide tabs">
                ĐỒ THỂ THAO
            </div>
            <div class="swiper-slide tabs">
                ÁO CHỐNG NẮNG
            </div>
            <div class="swiper-slide tabs">
                ÁO thun
            </div>
            <div class="swiper-slide tabs">
                ÁO POLO
            </div>
        </div>
    </div>
    <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="frontend/img/b5.webp" />
            </div>
            <div class="swiper-slide">
                <img src="frontend/img/b1.webp" />
            </div>
            <div class="swiper-slide">
                <img src="frontend/img/b2.webp" />
            </div>
            <div class="swiper-slide">
                <img src="frontend/img/b3.webp" />
            </div>
            <div class="swiper-slide">
                <img src="frontend/img/b4.webp" />
            </div>
        </div>
        <div class="swiper-button-next swiper-button-next3">
            <i class="fa-solid fa-arrow-right"></i>
        </div>
        <div class="swiper-button-prev swiper-button-prev3">
            <i class="fa-solid fa-arrow-left"></i>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="title-block">EVERYDAY WEAR - THOẢI MÁI, TỰ TIN MỌI LÚC MỌI NƠI</div>
    <h1 class="suggestion">GỢI Ý CHO BẠN</h1>

    <div class="section-intro">
        <div class="section-intro-title">
            <div class="section-intro-cate">
                <div><img src="<?php echo base_url("frontend/img/fire-icon-new.webp"); ?>"></div>
                <h1>SALE</h1>
            </div>
            <a href="<?php echo base_url('allSaleProducts'); ?>">Xem thêm ></a>
        </div>
        <div class="swiper section-intro-products">
            <div class="swiper-wrapper swiper-products">
                <?php
foreach ($allListProducts as $key => $allpro) {
    if ($allpro->sale_status == 1 && $allpro->sale_status_index == 1) {
        ?>
                <div class="swiper-slide">
                    <a href="<?php echo base_url('product/' . $allpro->id); ?>" class="products_items">
                        <div class="products_items-card">
                            <div class="products_items-card-img">
                                <img src="<?php echo base_url('frontend/img/' . $allpro->images); ?>">
                                <button class="btn-buy btn-buy-section-intro"></button>
                            </div>
                            <h1 class="products_items-card-name"><?php echo $allpro->name; ?></h1>
                            <div class="products_items-card-price">
                                <span class="new-price"><?php echo number_format($allpro->price, 0, ',', '.'); ?>đ
                                </span>
                                <?php if ($allpro->sale_status == 1) {?>
                                <span
                                    class="old-price"><?php echo number_format($allpro->old_price, 0, ',', '.'); ?>đ</span>
                                <?php }?>
                            </div>
                            <div class="products_items-card-option">
                                <?php
foreach ($allColors as $key => $colors) {
            if ($colors->product_id === $allpro->id) {
                ?>
                                <div class="products_items-card-option-img">
                                    <img src="<?php echo base_url('frontend/img/' . $colors->color); ?>">
                                </div>
                                <?php
}
        }
        ?>
                            </div>
                        </div>
                    </a>
                </div>
                <?php }}?>
                <!-- <div class="swiper-slide">
                    <div class="products_items-card">
                        <div class="products_items-card-img">
                            <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp">
                            <button class="btn-buy btn-buy-section-intro"></button>
                        </div>
                        <h1 class="products_items-card-name">Áo Đôi - Áo Polo Thể Thao Active Melange In
                            Phản Quang</h1>
                        <div class="products_items-card-price">
                            <span class="new-price">329.000đ</span>
                            <span class="old-price">499.000đ</span>
                        </div>
                        <div class="products_items-card-option">
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="products_items-card">
                        <div class="products_items-card-img">
                            <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp">
                            <button class="btn-buy btn-buy-section-intro"></button>
                        </div>
                        <h1 class="products_items-card-name">Áo Đôi - Áo Polo Thể Thao Active Melange In
                            Phản Quang</h1>
                        <div class="products_items-card-price">
                            <span class="new-price">329.000đ</span>
                            <span class="old-price">499.000đ</span>
                        </div>
                        <div class="products_items-card-option">
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="products_items-card">
                        <div class="products_items-card-img">
                            <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp">
                            <button class="btn-buy btn-buy-section-intro"></button>
                        </div>
                        <h1 class="products_items-card-name">Áo Đôi - Áo Polo Thể Thao Active Melange In
                            Phản Quang</h1>
                        <div class="products_items-card-price">
                            <span class="new-price">329.000đ</span>
                            <span class="old-price">499.000đ</span>
                        </div>
                        <div class="products_items-card-option">
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="products_items-card">
                        <div class="products_items-card-img">
                            <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp">
                            <button class="btn-buy btn-buy-section-intro"></button>
                        </div>
                        <h1 class="products_items-card-name">Áo Đôi - Áo Polo Thể Thao Active Melange In
                            Phản Quang</h1>
                        <div class="products_items-card-price">
                            <span class="new-price">329.000đ</span>
                            <span class="old-price">499.000đ</span>
                        </div>
                        <div class="products_items-card-option">
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="products_items-card">
                        <div class="products_items-card-img">
                            <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp">
                            <button class="btn-buy btn-buy-section-intro"></button>
                        </div>
                        <h1 class="products_items-card-name">Áo Đôi - Áo Polo Thể Thao Active Melange In
                            Phản Quang</h1>
                        <div class="products_items-card-price">
                            <span class="new-price">329.000đ</span>
                            <span class="old-price">499.000đ</span>
                        </div>
                        <div class="products_items-card-option">
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="products_items-card">
                        <div class="products_items-card-img">
                            <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp">
                            <button class="btn-buy btn-buy-section-intro"></button>
                        </div>
                        <h1 class="products_items-card-name">Áo Đôi - Áo Polo Thể Thao Active Melange In
                            Phản Quang</h1>
                        <div class="products_items-card-price">
                            <span class="new-price">329.000đ</span>
                            <span class="old-price">499.000đ</span>
                        </div>
                        <div class="products_items-card-option">
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="products_items-card">
                        <div class="products_items-card-img">
                            <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp">
                            <button class="btn-buy btn-buy-section-intro"></button>
                        </div>
                        <h1 class="products_items-card-name">Áo Đôi - Áo Polo Thể Thao Active Melange In
                            Phản Quang</h1>
                        <div class="products_items-card-price">
                            <span class="new-price">329.000đ</span>
                            <span class="old-price">499.000đ</span>
                        </div>
                        <div class="products_items-card-option">
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="products_items-card">
                        <div class="products_items-card-img">
                            <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp">
                            <button class="btn-buy btn-buy-section-intro"></button>
                        </div>
                        <h1 class="products_items-card-name">Áo Đôi - Áo Polo Thể Thao Active Melange In
                            Phản Quang</h1>
                        <div class="products_items-card-price">
                            <span class="new-price">329.000đ</span>
                            <span class="old-price">499.000đ</span>
                        </div>
                        <div class="products_items-card-option">
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                            <div class="products_items-card-option-img">
                                <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="section-intro-cate section-products">
        <div><img src="frontend/img/fire-icon-new.webp"></div>
        <h1>Gợi ý cho bạn</h1>
    </div>
    <div class="cate-product-list-hot">
        <div class="cate-product-hot">
            <div>
                <img src="frontend/img/ao-thun-nam-menu.webp">
            </div>
            <span>#ÁoThun</span>
        </div>
        <div class="cate-product-hot">
            <div>
                <img src="frontend/img/ao-polo-nam-menu.png">
            </div>
            <span>#ÁoPolo</span>
        </div>
    </div>
    <div class="products">
        <div class="grid wide">
            <div class="row">
                <?php
foreach ($allProducts as $key => $allpro) {
    ?>
                <div class="col l-2-4 m-3 c-6">
                    <a href="<?php echo base_url('product/' . $allpro->id); ?>" class="products_items">
                        <div class="products_items-card">
                            <div class="products_items-card-img">
                                <img src="<?php echo base_url('frontend/img/' . $allpro->images); ?>">
                                <button class="btn-buy"></button>
                            </div>
                            <h1 class="products_items-card-name"><?php echo $allpro->name; ?></h1>
                            <div class="products_items-card-price">
                                <span class="new-price"><?php echo number_format($allpro->price, 0, ',', '.'); ?>đ
                                </span>
                                <?php if ($allpro->sale_status == 1) {?>
                                <span
                                    class="old-price"><?php echo number_format($allpro->old_price, 0, ',', '.'); ?>đ</span>
                                <?php }?>
                            </div>
                            <div class="products_items-card-option">
                                <?php
foreach ($allColors as $key => $colors) {
        if ($colors->product_id === $allpro->id) {
            ?>
                                <div class="products_items-card-option-img">
                                    <img src="<?php echo base_url('frontend/img/' . $colors->color); ?>">
                                </div>
                                <?php
}
    }
    ?>
                                <!-- <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div> -->
                            </div>
                        </div>
                    </a>
                </div>
                <?php }?>
                <!-- <div class="col l-2-4 m-4 c-6">
                    <a href="./detailProduct" class="products_items">
                        <div class="products_items-card">
                            <div class="products_items-card-img">
                                <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp">
                                <button class="btn-buy"></button>
                            </div>
                            <h1 class="products_items-card-name">Áo Đôi - Áo Polo Thể Thao Active Melange In
                                Phản Quang</h1>
                            <div class="products_items-card-price">
                                <span class="new-price">329.000đ</span>
                                <span class="old-price">499.000đ</span>
                            </div>
                            <div class="products_items-card-option">
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <a href="./detailProduct" class="products_items">
                        <div class="products_items-card">
                            <div class="products_items-card-img">
                                <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp">
                                <button class="btn-buy"></button>
                            </div>
                            <h1 class="products_items-card-name">Áo Đôi - Polo Cafe Phối Nẹp</h1>
                            <div class="products_items-card-price">329.000đ</div>
                            <div class="products_items-card-option">
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <a href="./detailProduct" class="products_items">
                        <div class="products_items-card">
                            <div class="products_items-card-img">
                                <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp">
                                <button class="btn-buy"></button>
                            </div>
                            <h1 class="products_items-card-name">Áo Đôi - Áo Polo Thể Thao Active Melange In
                                Phản Quang</h1>
                            <div class="products_items-card-price">329.000đ</div>
                            <div class="products_items-card-option">
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <a href="./detailProduct" class="products_items">
                        <div class="products_items-card">
                            <div class="products_items-card-img">
                                <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp">
                                <button class="btn-buy"></button>
                            </div>
                            <h1 class="products_items-card-name">Áo Đôi - Áo Polo Thể Thao Active Melange In
                                Phản Quang</h1>
                            <div class="products_items-card-price">329.000đ</div>
                            <div class="products_items-card-option">
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <a href="./detailProduct" class="products_items">
                        <div class="products_items-card">
                            <div class="products_items-card-img">
                                <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp">
                                <button class="btn-buy"></button>
                            </div>
                            <h1 class="products_items-card-name">Áo Đôi - Áo Polo Thể Thao Active Melange In
                                Phản Quang</h1>
                            <div class="products_items-card-price">329.000đ</div>
                            <div class="products_items-card-option">
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <a href="./detailProduct" class="products_items">
                        <div class="products_items-card">
                            <div class="products_items-card-img">
                                <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp">
                                <button class="btn-buy"></button>
                            </div>
                            <h1 class="products_items-card-name">Áo Đôi - Áo Polo Thể Thao Active Melange In
                                Phản Quang</h1>
                            <div class="products_items-card-price">
                                <span class="new-price">329.000đ</span>
                                <span class="old-price">499.000đ</span>
                            </div>
                            <div class="products_items-card-option">
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <a href="./detailProduct" class="products_items">
                        <div class="products_items-card">
                            <div class="products_items-card-img">
                                <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp">
                                <button class="btn-buy"></button>
                            </div>
                            <h1 class="products_items-card-name">Áo Đôi - Polo Cafe Phối Nẹp</h1>
                            <div class="products_items-card-price">329.000đ</div>
                            <div class="products_items-card-option">
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <a href="./detailProduct" class="products_items">
                        <div class="products_items-card">
                            <div class="products_items-card-img">
                                <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp">
                                <button class="btn-buy"></button>
                            </div>
                            <h1 class="products_items-card-name">Áo Đôi - Áo Polo Thể Thao Active Melange In
                                Phản Quang</h1>
                            <div class="products_items-card-price">329.000đ</div>
                            <div class="products_items-card-option">
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <a href="./detailProduct" class="products_items">
                        <div class="products_items-card">
                            <div class="products_items-card-img">
                                <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp">
                                <button class="btn-buy"></button>
                            </div>
                            <h1 class="products_items-card-name">Áo Đôi - Áo Polo Thể Thao Active Melange In
                                Phản Quang</h1>
                            <div class="products_items-card-price">329.000đ</div>
                            <div class="products_items-card-option">
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col l-2-4 m-4 c-6">
                    <a href="./detailProduct" class="products_items">
                        <div class="products_items-card">
                            <div class="products_items-card-img">
                                <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp">
                                <button class="btn-buy"></button>
                            </div>
                            <h1 class="products_items-card-name">Áo Đôi - Áo Polo Thể Thao Active Melange In
                                Phản Quang</h1>
                            <div class="products_items-card-price">329.000đ</div>
                            <div class="products_items-card-option">
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                                <div class="products_items-card-option-img">
                                    <img src="frontend/img/sam5009-den-san5004-den-2.webp">
                                </div>
                            </div>
                        </div>
                    </a>
                </div> -->
            </div>

        </div>
        <div class="more"><a href="<?php echo base_url('listAllProducts'); ?>" class="btn-more">Xem thêm</a></div>
    </div>