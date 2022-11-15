<div class="container">
    <div class="modal-overlay"></div>
    <div class="container-content">
        <div class="container-content_title">
            <div class="list-path">
                <div class="path"><a href=""> Trang chủ /</a></div>

                <div class="path"><a href=""> <?php echo $categoryMain ?> /</a></div>

                <div class="path"><a href=""> <?php echo $categoryTitle; ?> </a></div>
            </div>
            <h1><?php echo $categoryName; ?></h1>
        </div>
        <div class="container-content_products">
            <div class="container-content_products-cate">
                <div class="container-content_products-cate-option">
                    <div class="container-content_products-cate-option-title more">
                        <span>Loại sản phẩm</span>
                        <div class="icon">
                            <div class="up"><i class="fa-solid fa-angle-up"></i></div>
                            <div class="down"><i class="fa-solid fa-angle-down"></i></div>
                        </div>
                    </div>
                    <div class="container-content_products-cate-option-list show">
                        <div class="container-content_products-cate-option-list-item">
                            <?php echo $categoryName; ?> <?php echo $categoryMain; ?>
                        </div>
                    </div>
                </div>
                <div class="container-content_products-cate-option">
                    <div class="container-content_products-cate-option-title more">
                        <span>Màu sắc</span>
                        <div class="icon">
                            <div class="up"><i class="fa-solid fa-angle-up"></i></div>
                            <div class="down"><i class="fa-solid fa-angle-down"></i></div>
                        </div>
                    </div>
                    <div class="container-content_products-cate-option-list show">
                        <?php foreach ($allColorsCate as $key => $colorCate) {
    if ($colorCate->subStatusCate == 1) {
        ?>
                        <input type="checkbox" value="<?php echo $colorCate->name_color; ?>"
                            name="<?php echo $colorCate->name_color; ?>" id="<?php echo $colorCate->name_color; ?>"
                            class="color-option-checkbox color">
                        <label for="<?php echo $colorCate->name_color; ?>"
                            class="container-content_products-cate-option-list-item">
                            <div style="background-color: <?php echo $colorCate->code; ?>;" class="circle-color"></div>
                            <span><?php echo $colorCate->name_color; ?></span>
                        </label>
                        <?php }}?>
                        <!-- <div class="container-content_products-cate-option-list-item">
                            <div class="circle-color white"></div>
                            <span>Trắng</span>
                        </div>
                        <div class="container-content_products-cate-option-list-item">
                            <div class="circle-color blue-navy"></div>
                            <span>Xanh Navy</span>
                        </div>
                        <div class="container-content_products-cate-option-list-item">
                            <div class="circle-color green"></div>
                            <span>Xanh lá</span>
                        </div>
                        <div class="container-content_products-cate-option-list-item">
                            <div class="circle-color brown"></div>
                            <span>Nâu</span>
                        </div>
                        <div class="container-content_products-cate-option-list-item">
                            <div class="circle-color red"></div>
                            <span>Đỏ</span>
                        </div>
                        <div class="container-content_products-cate-option-list-item">
                            <div class="circle-color grey"></div>
                            <span>Xám</span>
                        </div> -->
                        <div class="container-content_products-cate-option-list-item-more">
                            <?php foreach ($allColorsCate as $key => $colorCate) {
    if ($colorCate->subStatusCate == 2) {
        ?>
                            <input type="checkbox" value="<?php echo $colorCate->name_color; ?>"
                                name="color-option-checkbox" id="<?php echo $colorCate->name_color; ?>"
                                class="color-option-checkbox color">
                            <label for="<?php echo $colorCate->name_color; ?>"
                                class="container-content_products-cate-option-list-item">
                                <div style="background-color: <?php echo $colorCate->code; ?>;" class="circle-color">
                                </div>
                                <span><?php echo $colorCate->name_color; ?></span>
                            </label>
                            <?php }}?>
                            <!-- <div class="container-content_products-cate-option-list-item">
                                Pima
                            </div>
                            <div class="container-content_products-cate-option-list-item">
                                Pima
                            </div>
                            <div class="container-content_products-cate-option-list-item">
                                Pima
                            </div>
                            <div class="container-content_products-cate-option-list-item">
                                Pima
                            </div> -->
                        </div>

                        <div class="see-more">
                            Xem thêm
                            <span class="see-more-icon"><i class="fa-solid fa-arrow-down"></i></span>
                        </div>
                        <div class="see-less">
                            Thu gọn
                            <span class="see-less-icon"><i class="fa-solid fa-arrow-up"></i></span>
                        </div>
                    </div>
                </div>
                <div class="container-content_products-cate-option">
                    <div class="container-content_products-cate-option-title more">
                        <span>Kích thước</span>
                        <div class="icon">
                            <div class="up"><i class="fa-solid fa-angle-up"></i></div>
                            <div class="down"><i class="fa-solid fa-angle-down"></i></div>
                        </div>
                    </div>
                    <div class="container-content_products-cate-option-list show">
                        <?php foreach ($allSizesCate as $key => $allSizesCate) {?>
                        <input type="checkbox" value="<?php echo $allSizesCate->size; ?>"
                            name="<?php echo $allSizesCate->size; ?>" id="<?php echo $allSizesCate->size; ?>"
                            class="color-option-checkbox size">
                        <label for="<?php echo $allSizesCate->size; ?>"
                            class="container-content_products-cate-option-list-item">
                            <?php echo $allSizesCate->size; ?>
                        </label>
                        <?php }?>
                        <!-- <div class="container-content_products-cate-option-list-item">
                            S
                        </div>
                        <div class="container-content_products-cate-option-list-item">
                            M
                        </div>
                        <div class="container-content_products-cate-option-list-item">
                            L
                        </div>
                        <div class="container-content_products-cate-option-list-item">
                            XL
                        </div>
                        <div class="container-content_products-cate-option-list-item">
                            2XL
                        </div>
                        <div class="container-content_products-cate-option-list-item">
                            3XL
                        </div>
                        <div class="container-content_products-cate-option-list-item">
                            4XL
                        </div> -->
                    </div>
                </div>
                <!-- <div class="container-content_products-cate-option">
                    <div class="container-content_products-cate-option-title more">
                        <span>Chất liệu</span>
                        <div class="icon">
                            <div class="up"><i class="fa-solid fa-angle-up"></i></div>
                            <div class="down"><i class="fa-solid fa-angle-down"></i></div>
                        </div>
                    </div>
                    <div class="container-content_products-cate-option-list show">
                        <div class="container-content_products-cate-option-list-item">
                            Pique
                        </div>
                        <div class="container-content_products-cate-option-list-item">
                            Airycool
                        </div>
                        <div class="container-content_products-cate-option-list-item">
                            Cafe
                        </div>
                        <div class="container-content_products-cate-option-list-item">
                            Coolmax
                        </div>
                        <div class="container-content_products-cate-option-list-item">
                            Cotton
                        </div>
                        <div class="container-content_products-cate-option-list-item">
                            Vỏ hàu
                        </div>
                        <div class="container-content_products-cate-option-list-item">
                            Nano
                        </div>
                        <div class="container-content_products-cate-option-list-item">
                            Pima
                        </div>
                        <div class="container-content_products-cate-option-list-item-more">
                            <div class="container-content_products-cate-option-list-item">
                                Pima
                            </div>
                            <div class="container-content_products-cate-option-list-item">
                                Pima
                            </div>
                            <div class="container-content_products-cate-option-list-item">
                                Pima
                            </div>
                            <div class="container-content_products-cate-option-list-item">
                                Pima
                            </div>
                            <div class="container-content_products-cate-option-list-item">
                                Pima
                            </div>
                        </div>
                        <div class="see-more">
                            Xem thêm
                            <span class="see-more-icon"><i class="fa-solid fa-arrow-down"></i></span>
                        </div>
                        <div class="see-less">
                            Thu gọn
                            <span class="see-less-icon"><i class="fa-solid fa-arrow-up"></i></span>
                        </div>
                    </div>
                </div> -->
                <div class="container-content_products-cate-option">
                    <div class="container-content_products-cate-option-title more">
                        <span>Khoảng giá (VNĐ)</span>
                        <div class="icon">
                            <div class="up"><i class="fa-solid fa-angle-up"></i></div>
                            <div class="down"><i class="fa-solid fa-angle-down"></i></div>
                        </div>
                    </div>
                    <div class="container-content_products-cate-option-list show">
                        <input type="hidden" id="hidden_minimum_price" value="0" />
                        <input type="hidden" id="hidden_maximum_price" value="999999" />
                        <p id="price_show">1000đ - 999999đ</p>
                        <div id="price_range"></div>
                        <!-- <label class="container-content_products-cate-option-list-item-price">
                            <label class="price-text">Nhỏ hơn 100.000đ</label>
                            <input type="checkbox" />
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-content_products-cate-option-list-item-price">
                            <label class="price-text">Từ 100.000đ - 200.000đ</label>
                            <input type="checkbox" />
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-content_products-cate-option-list-item-price">
                            <label class="price-text">Từ 200.000đ - 350.000đ</label>
                            <input type="checkbox" />
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-content_products-cate-option-list-item-price">
                            <label class="price-text">Từ 350.000đ - 500.000đ</label>

                            <input type="checkbox" />
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-content_products-cate-option-list-item-price">
                            <label class="price-text">Từ 500.000đ - 700.000đ</label>

                            <input type="checkbox" />
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-content_products-cate-option-list-item-price">
                            <label class="price-text">Lớn hơn 700.000đ</label>

                            <input type="checkbox" />
                            <span class="checkmark"></span>
                        </label> -->
                    </div>
                </div>
            </div>
            <div class="container-content_products-list">

                <div class="container-content_products-list-products">
                    <div class="grid wide">
                        <div class="row">
                            <!-- <?php
foreach ($allproductByCate_pagination as $key => $allpro) {
    ?>
                            <div class="col l-3 m-4 c-6">
                                <a href="<?php echo base_url('product/' . $allpro->id); ?>" class="products_items">
                                    <div class="products_items-card">
                                        <div class="products_items-card-img">
                                            <img src="<?php echo base_url('frontend/img/' . $allpro->images); ?>">
                                            <button class="btn-buy"></button>
                                        </div>
                                        <h1 class="products_items-card-name"><?php echo $allpro->name; ?></h1>
                                        <div class="products_items-card-price">
                                            <span
                                                class="new-price"><?php echo number_format($allpro->price, 0, ',', '.'); ?>đ
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
                            <?php }?> -->

                            <div class="filter_data">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination_link">
                    <!-- <?php echo $links; ?> -->

                </div>
                <div class="products-banner">
                    <span>
                        <?php echo $categoryCharacteristics; ?>.
                    </span>
                </div>
            </div>
        </div>
    </div>