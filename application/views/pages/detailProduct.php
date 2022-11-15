<div class="container">
    <div class="modal-overlay"></div>
    <div class="container-content">
        <div class="container-content_path">
            <a href="">Trang chủ</a>
            <span>/</span>
            <a href="">Hàng mới về tháng qua</a>
            <span>/</span>
            <a href="" class="now">Áo Giữ Nhiệt Nam Cao Cổ </a>
        </div>
        <?php
            foreach ($detailProduct as $key => $pro) {
        ?>
        <form id="add-cart" action="<?php echo base_url('add-to-cart'); ?>" method="POST">
            <div class="container-content_product">
                <div class="container-content_product-slide">
                    <div class="container-content_product-slide-control">
                        <div class="top">
                            <i class="fa-solid fa-angle-up"></i>
                        </div>
                        <div class="down">
                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                        <div class="slider">
                            <?php
                                foreach ($allImages as $key => $images) {
                                    if ($images->product_id === $pro->id) {
                            ?>
                            <div class="slider-img">
                                <img class="thumbnails"
                                    src="<?php echo base_url('frontend/img/' . $images->image); ?>" />
                            </div>
                            <!-- <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-13.webp" />
                            </div>
                            <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-15.webp" />
                            </div>
                            <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-16.webp" />
                            </div>
                            <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-3.webp" />
                            </div>
                            <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-5.webp" />
                            </div>
                            <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-7.webp" />
                            </div>
                            <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-8.webp" />
                            </div>
                            <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-10.webp" />
                            </div>
                            <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-11.webp" />
                            </div>
                            <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-12.webp" />
                            </div> -->
                            <?php 
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="container-content_product-slide-image">
                        <img class="main-img" src="<?php echo base_url('frontend/img/' . $pro->images); ?>" />
                    </div>
                </div>
                <div class="swiper slide-mobile">
                    <div class="swiper-wrapper">
                        <?php
                            foreach ($allImages as $key => $images) {
                                if ($images->product_id === $pro->id) {
                        ?>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url('frontend/img/' . $images->image); ?>" />
                        </div>
                        <!-- <div class="swiper-slide">
                            <img src="frontend/img/atm5149-den-13.webp" />
                        </div>
                        <div class="swiper-slide">
                            <img src="frontend/img/atm5149-den-15.webp" />
                        </div>
                        <div class="swiper-slide">
                            <img src="frontend/img/atm5149-den-16.webp" />
                        </div>
                        <div class="swiper-slide">
                            <img src="frontend/img/atm5149-den-3.webp" />
                        </div>
                        <div class="swiper-slide">
                            <img src="frontend/img/atm5149-den-5.webp" />
                        </div>
                        <div class="swiper-slide">
                            <img src="frontend/img/atm5149-den-7.webp" />
                        </div>
                        <div class="swiper-slide">
                            <img src="frontend/img/atm5149-den-8.webp" />
                        </div>
                        <div class="swiper-slide">
                            <img src="frontend/img/atm5149-den-10.webp" />
                        </div> -->
                        <?php 
                                }
                            }
                        ?>
                    </div>
                    <div class="swiper-button-next swiper-button-next1">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <div class="swiper-button-prev swiper-button-prev1">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="container-content_product-detail">
                    <div class="container-content_product-detail-title">
                        <div class="container-content_product-detail-title-name">
                            <h1><?php echo $pro->name; ?></h1>
                            <div class="container-content_product-detail-title-code">
                                <span><?php echo $pro->code; ?></span>
                                <div class="star">
                                    <a href=""><i class="fa-regular fa-star"></i></a>
                                    <a href=""><i class="fa-regular fa-star"></i></a>
                                    <a href=""><i class="fa-regular fa-star"></i></a>
                                    <a href=""><i class="fa-regular fa-star"></i></a>
                                    <a href=""><i class="fa-regular fa-star"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="container-content_product-detail-like">
                            <div class="no-like"><i class="fa-regular fa-heart"></i></div>
                            <div class="like"><i class="fa-solid fa-heart"></i></div>
                        </div>
                    </div>
                    <div class="container-content_product-detail-price">
                        <span><?php echo number_format($pro->price,0,',','.'); ?>đ</span>
                    </div>
                    <input type="hidden" name="product_id" value="<?php echo $pro->id; ?>">
                    <div class="container-content_product-detail-banner">
                        <img src="<?php echo base_url('frontend/img/bannr_kich_thich_mua_desktop.webp'); ?>" />
                    </div>
                    <div class="container-content_product-detail-color">
                        <span class="color-title">Màu sắc:
                            <span class="color-name"></span>
                        </span>
                        <div class="product-img-color">
                            <?php 
                                foreach($allColors as $key => $colors){
                                    if($colors->product_id === $pro->id){
                            ?>
                            <div class="img-cate-color">
                                <input type="radio" class="option-color" id="<?php echo $colors->name_color;?>"
                                    value="<?php echo $colors->name_color;?>" name="option-color" />
                                <label for="<?php echo $colors->name_color;?>" class="text-color">
                                    <img class="img-color" src="<?php echo base_url('frontend/img/'.$colors->color);?>"
                                        alt="<?php echo $colors->name_color;?>" />
                                    <?php if($colors->status == 0){ ?>
                                    <div class="disable"></div>
                                    <?php } ?>
                                </label>
                            </div>
                            <!-- <div class="img-cate-color">
                                <img src="frontend/img/atm5149-den-5.webp" />
                                <div class="disable"></div>
                            </div>
                            <div class="img-cate-color">
                                <img src="frontend/img/atm5149-den-5.webp" />
                            </div>
                            <div class="img-cate-color">
                                <img src="frontend/img/atm5149-den-5.webp" />
                            </div>
                            <div class="img-cate-color">
                                <img src="frontend/img/atm5149-den-5.webp" />
                            </div> -->
                            <?php 
                                    }
                                } 
                            ?>
                        </div>
                    </div>
                    <div class="container-content_product-detail-size">
                        <div class="container-content_product-detail-size-title">
                            <div class="size-text">
                                <span>Kích thước: <span class="size"></span></span>
                                <div class="help-size">
                                    <div>
                                        <img
                                            src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/size.svg?1663632340612" />
                                    </div>
                                    <span>Giúp bạn chọn size</span>
                                    <div><i class="fa-solid fa-angle-down"></i></div>
                                </div>
                            </div>
                            <div class="table-size-text">
                                <a href="">Bảng size chuẩn</a>
                            </div>
                        </div>
                        <div class="product-size-option">
                            <?php 
                                foreach($allSizes as $key => $sizes){
                                    if($sizes->product_id === $pro->id){
                                        
                            ?>

                            <!-- <div class="size-option"> -->
                            <!-- <?php echo $sizes->size; ?> -->
                            <!-- </div> -->
                            <div class="size-option">
                                <input type="radio" class="option-size" id="<?php echo $sizes->size; ?>"
                                    value="<?php echo $sizes->size; ?>" name="option-size" />
                                <label for="<?php echo $sizes->size; ?>" class="text-size">
                                    <?php echo $sizes->size; ?>
                                </label>
                            </div>

                            <!-- <div class="size-option">
                                L
                            </div>
                            <div class="size-option">
                                XL
                            </div>
                            <div class="size-option">
                                2XL
                            </div>
                            <div class="size-option">
                                3XL
                            </div>
                            <div class="size-option">
                                4XL
                            </div> -->
                            <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="container-content_product-detail-amount">
                        <span>Chọn số lượng:</span>
                        <div class="controll-amount">
                            <div class="desc">-</div>
                            <input name="quantity" value="<?php echo $pro->qty; ?>" class="amount"
                                id="<?php echo $pro->id; ?>" />
                            <div class="incr">+</div>
                        </div>
                    </div>
                    <div class="container-content_product-detail-buy">
                        <?php if($this->session->userdata('LoggedIn')){ ?>
                        <button type="submit" form="add-checkout" class="buy-now">Mua ngay
                        </button>
                        <?php }else{ ?>
                        <a href="<?php echo base_url('login');?>" class="buy-now">Mua ngay
                        </a>
                        <?php } ?>
                        <button type="submit" class="add-cart">
                            <div><i class="fa-solid fa-cart-plus"></i></div>
                            <span>Thêm Vào Giỏ Hàng</span>
                        </button>
                    </div>
                    <div class="container-content_product-detail-list-service">
                        <div class="container-content_product-detail-list-service-items">
                            <div class="container-content_product-detail-list-service-items-img">
                                <img src="<?php echo base_url('frontend/img/ser_1.webp'); ?>" />
                            </div>
                            <div class="container-content_product-detail-list-service-items-text">
                                <div class="title-service">Miễn phí vận chuyển đơn 0đ</div>
                                <div class="service-sumary">
                                    FREESHIP mọi đơn hàng từ 1/9-30/9
                                </div>
                            </div>
                        </div>
                        <div class="container-content_product-detail-list-service-items">
                            <div class="container-content_product-detail-list-service-items-img">
                                <img src="<?php echo base_url('frontend/img/ser_2.webp');?>" />
                            </div>
                            <div class="container-content_product-detail-list-service-items-text">
                                <div class="title-service">Đa dạng hình thức thanh toán</div>
                                <div class="service-sumary">Momo, VNPay, COD</div>
                            </div>
                        </div>
                        <div class="container-content_product-detail-list-service-items">
                            <div class="container-content_product-detail-list-service-items-img">
                                <img src="<?php echo base_url('frontend/img/ser_3.webp');?>" />
                            </div>
                            <div class="container-content_product-detail-list-service-items-text">
                                <div class="title-service">Giao hàng nhanh</div>
                                <div class="service-sumary">Chỉ từ 2-5 ngày</div>
                            </div>
                        </div>
                        <div class="container-content_product-detail-list-service-items">
                            <div class="container-content_product-detail-list-service-items-img">
                                <img src="<?php echo base_url('frontend/img/ser_4.webp');?>" />
                            </div>
                            <div class="container-content_product-detail-list-service-items-text">
                                <div class="title-service">Miễn phí ĐỔI, TRẢ</div>
                                <div class="service-sumary">
                                    Trong 15 ngày tại 180+ điểm bán
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-content_product-detail-characteristics">
                        <div class="container-content_product-detail-characteristics-title">
                            Đặc điểm sản phẩm
                        </div>
                        <div class="container-content_product-detail-characteristics-list">
                            <div class="container-content_product-detail-characteristics-list-item">
                                <div class="tick">
                                    <img
                                        src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/tick-line.svg" />
                                </div>
                                <span>Chất liệu pique modal bao gồm 24% Cotton, 22% Modal, 51%
                                    Polyester, 3% Spandex</span>
                            </div>
                            <div class="container-content_product-detail-characteristics-list-item">
                                <div class="tick">
                                    <img
                                        src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/tick-line.svg" />
                                </div>
                                <span>Thoải với với chất liệu mềm mại, thông thoáng</span>
                            </div>
                            <div class="container-content_product-detail-characteristics-list-item">
                                <div class="tick">
                                    <img
                                        src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/tick-line.svg" />
                                </div>
                                <span>Thoải mái cử động với khả năng co giãn và đàn hồi tốt</span>
                            </div>
                            <div class="container-content_product-detail-characteristics-list-item">
                                <div class="tick">
                                    <img
                                        src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/tick-line.svg" />
                                </div>
                                <span>Áo polo nam dáng regular ôm vừa phải cơ thể, phù hợp với
                                    mọi dáng người, với điểm nhấn bo dệt kẻ nổi bật.</span>
                            </div>
                            <div class="container-content_product-detail-characteristics-list-item">
                                <div class="tick">
                                    <img
                                        src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/tick-line.svg" />
                                </div>
                                <span>Mặc cùng quần âu, jeans, short và trong nhiều hoàn cảnh như
                                    đi làm, đi học, đi chơi...</span>
                            </div>
                            <div class="container-content_product-detail-characteristics-list-item">
                                <div class="tick">
                                    <img
                                        src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/tick-line.svg" />
                                </div>
                                <span>YODY - Look good. Feel good.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form id="add-checkout" action="<?php echo base_url('add-to-checkout'); ?>" method="POST">
            <div class="container-content_product">
                <div class="container-content_product-slide">
                    <div class="container-content_product-slide-control">
                        <div class="top">
                            <i class="fa-solid fa-angle-up"></i>
                        </div>
                        <div class="down">
                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                        <div class="slider">
                            <?php
                                foreach ($allImages as $key => $images) {
                                    if ($images->product_id === $pro->id) {
                            ?>
                            <div class="slider-img">
                                <img class="thumbnails"
                                    src="<?php echo base_url('frontend/img/' . $images->image); ?>" />
                            </div>
                            <!-- <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-13.webp" />
                            </div>
                            <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-15.webp" />
                            </div>
                            <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-16.webp" />
                            </div>
                            <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-3.webp" />
                            </div>
                            <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-5.webp" />
                            </div>
                            <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-7.webp" />
                            </div>
                            <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-8.webp" />
                            </div>
                            <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-10.webp" />
                            </div>
                            <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-11.webp" />
                            </div>
                            <div class="slider-img">
                                <img class="thumbnails" src="frontend/img/atm5149-den-12.webp" />
                            </div> -->
                            <?php 
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="container-content_product-slide-image">
                        <img class="main-img" src="<?php echo base_url('frontend/img/' . $pro->images); ?>" />
                    </div>
                </div>
                <div class="swiper slide-mobile">
                    <div class="swiper-wrapper">
                        <?php
                            foreach ($allImages as $key => $images) {
                                if ($images->product_id === $pro->id) {
                        ?>
                        <div class="swiper-slide">
                            <img src="<?php echo base_url('frontend/img/' . $images->image); ?>" />
                        </div>
                        <!-- <div class="swiper-slide">
                            <img src="frontend/img/atm5149-den-13.webp" />
                        </div>
                        <div class="swiper-slide">
                            <img src="frontend/img/atm5149-den-15.webp" />
                        </div>
                        <div class="swiper-slide">
                            <img src="frontend/img/atm5149-den-16.webp" />
                        </div>
                        <div class="swiper-slide">
                            <img src="frontend/img/atm5149-den-3.webp" />
                        </div>
                        <div class="swiper-slide">
                            <img src="frontend/img/atm5149-den-5.webp" />
                        </div>
                        <div class="swiper-slide">
                            <img src="frontend/img/atm5149-den-7.webp" />
                        </div>
                        <div class="swiper-slide">
                            <img src="frontend/img/atm5149-den-8.webp" />
                        </div>
                        <div class="swiper-slide">
                            <img src="frontend/img/atm5149-den-10.webp" />
                        </div> -->
                        <?php 
                                }
                            }
                        ?>
                    </div>
                    <div class="swiper-button-next swiper-button-next1">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <div class="swiper-button-prev swiper-button-prev1">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="container-content_product-detail">
                    <div class="container-content_product-detail-title">
                        <div class="container-content_product-detail-title-name">
                            <h1><?php echo $pro->name; ?></h1>
                            <div class="container-content_product-detail-title-code">
                                <span><?php echo $pro->code; ?></span>
                                <div class="star">
                                    <a href=""><i class="fa-regular fa-star"></i></a>
                                    <a href=""><i class="fa-regular fa-star"></i></a>
                                    <a href=""><i class="fa-regular fa-star"></i></a>
                                    <a href=""><i class="fa-regular fa-star"></i></a>
                                    <a href=""><i class="fa-regular fa-star"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="container-content_product-detail-like">
                            <div class="no-like"><i class="fa-regular fa-heart"></i></div>
                            <div class="like"><i class="fa-solid fa-heart"></i></div>
                        </div>
                    </div>
                    <div class="container-content_product-detail-price">
                        <span><?php echo number_format($pro->price,0,',','.'); ?>đ</span>
                    </div>
                    <input type="hidden" name="product_id" value="<?php echo $pro->id; ?>">
                    <div class="container-content_product-detail-banner">
                        <img src="<?php echo base_url('frontend/img/bannr_kich_thich_mua_desktop.webp'); ?>" />
                    </div>
                    <div class="container-content_product-detail-color">
                        <span class="color-title">Màu sắc:
                            <span class="color-name"></span>
                        </span>
                        <div class="product-img-color">
                            <?php 
                                foreach($allColors as $key => $colors){
                                    if($colors->product_id === $pro->id){
                            ?>
                            <div class="img-cate-color">
                                <input type="radio" class="option-color" id="<?php echo $colors->name_color;?>"
                                    value="<?php echo $colors->name_color;?>" name="option-color" />
                                <label for="<?php echo $colors->name_color;?>">
                                    <img class="img-color" src="<?php echo base_url('frontend/img/'.$colors->color);?>"
                                        alt="<?php echo $colors->name_color;?>" />
                                    <?php if($colors->status == 0){ ?>
                                    <div class="disable"></div>
                                    <?php } ?>
                                </label>
                            </div>
                            <!-- <div class="img-cate-color">
                                <img src="frontend/img/atm5149-den-5.webp" />
                                <div class="disable"></div>
                            </div>
                            <div class="img-cate-color">
                                <img src="frontend/img/atm5149-den-5.webp" />
                            </div>
                            <div class="img-cate-color">
                                <img src="frontend/img/atm5149-den-5.webp" />
                            </div>
                            <div class="img-cate-color">
                                <img src="frontend/img/atm5149-den-5.webp" />
                            </div> -->
                            <?php 
                                    }
                                } 
                            ?>
                        </div>
                    </div>
                    <div class="container-content_product-detail-size">
                        <div class="container-content_product-detail-size-title">
                            <div class="size-text">
                                <span>Kích thước: <span class="size"></span></span>
                                <div class="help-size">
                                    <div>
                                        <img
                                            src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/size.svg?1663632340612" />
                                    </div>
                                    <span>Giúp bạn chọn size</span>
                                    <div><i class="fa-solid fa-angle-down"></i></div>
                                </div>
                            </div>
                            <div class="table-size-text">
                                <a href="">Bảng size chuẩn</a>
                            </div>
                        </div>
                        <div class="product-size-option">
                            <?php 
                                foreach($allSizes as $key => $sizes){
                                    if($sizes->product_id === $pro->id){
                                        
                            ?>

                            <div class="size-option">
                                <input type="radio" class="option-size" id="<?php echo $sizes->size; ?>"
                                    value="<?php echo $sizes->size; ?>" name="option-size" />
                                <label for="<?php echo $sizes->size; ?>">
                                    <?php echo $sizes->size; ?>
                                </label>
                            </div>


                            <!-- <div class="size-option">
                                L
                            </div>
                            <div class="size-option">
                                XL
                            </div>
                            <div class="size-option">
                                2XL
                            </div>
                            <div class="size-option">
                                3XL
                            </div>
                            <div class="size-option">
                                4XL
                            </div> -->
                            <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="container-content_product-detail-amount">
                        <span>Chọn số lượng:</span>
                        <div class="controll-amount">
                            <div class="desc-checkout">-</div>
                            <input name="quantity" value="1" class="amount-checkout" id="<?php echo $pro->id; ?>" />
                            <div class="incr-checkout">+</div>
                        </div>
                    </div>
                    <div class="container-content_product-detail-buy">
                        <button type="submit" class="buy-now">Mua ngay
                        </button>
                        <button type="submit" class="add-cart">
                            <div><i class="fa-solid fa-cart-plus"></i></div>
                            <span>Thêm Vào Giỏ Hàng</span>
                        </button>
                    </div>
                    <div class="container-content_product-detail-list-service">
                        <div class="container-content_product-detail-list-service-items">
                            <div class="container-content_product-detail-list-service-items-img">
                                <img src="<?php echo base_url('frontend/img/ser_1.webp'); ?>" />
                            </div>
                            <div class="container-content_product-detail-list-service-items-text">
                                <div class="title-service">Miễn phí vận chuyển đơn 0đ</div>
                                <div class="service-sumary">
                                    FREESHIP mọi đơn hàng từ 1/9-30/9
                                </div>
                            </div>
                        </div>
                        <div class="container-content_product-detail-list-service-items">
                            <div class="container-content_product-detail-list-service-items-img">
                                <img src="<?php echo base_url('frontend/img/ser_2.webp');?>" />
                            </div>
                            <div class="container-content_product-detail-list-service-items-text">
                                <div class="title-service">Đa dạng hình thức thanh toán</div>
                                <div class="service-sumary">Momo, VNPay, COD</div>
                            </div>
                        </div>
                        <div class="container-content_product-detail-list-service-items">
                            <div class="container-content_product-detail-list-service-items-img">
                                <img src="<?php echo base_url('frontend/img/ser_3.webp');?>" />
                            </div>
                            <div class="container-content_product-detail-list-service-items-text">
                                <div class="title-service">Giao hàng nhanh</div>
                                <div class="service-sumary">Chỉ từ 2-5 ngày</div>
                            </div>
                        </div>
                        <div class="container-content_product-detail-list-service-items">
                            <div class="container-content_product-detail-list-service-items-img">
                                <img src="<?php echo base_url('frontend/img/ser_4.webp');?>" />
                            </div>
                            <div class="container-content_product-detail-list-service-items-text">
                                <div class="title-service">Miễn phí ĐỔI, TRẢ</div>
                                <div class="service-sumary">
                                    Trong 15 ngày tại 180+ điểm bán
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-content_product-detail-characteristics">
                        <div class="container-content_product-detail-characteristics-title">
                            Đặc điểm sản phẩm
                        </div>
                        <div class="container-content_product-detail-characteristics-list">
                            <div class="container-content_product-detail-characteristics-list-item">
                                <div class="tick">
                                    <img
                                        src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/tick-line.svg" />
                                </div>
                                <span>Chất liệu pique modal bao gồm 24% Cotton, 22% Modal, 51%
                                    Polyester, 3% Spandex</span>
                            </div>
                            <div class="container-content_product-detail-characteristics-list-item">
                                <div class="tick">
                                    <img
                                        src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/tick-line.svg" />
                                </div>
                                <span>Thoải với với chất liệu mềm mại, thông thoáng</span>
                            </div>
                            <div class="container-content_product-detail-characteristics-list-item">
                                <div class="tick">
                                    <img
                                        src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/tick-line.svg" />
                                </div>
                                <span>Thoải mái cử động với khả năng co giãn và đàn hồi tốt</span>
                            </div>
                            <div class="container-content_product-detail-characteristics-list-item">
                                <div class="tick">
                                    <img
                                        src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/tick-line.svg" />
                                </div>
                                <span>Áo polo nam dáng regular ôm vừa phải cơ thể, phù hợp với
                                    mọi dáng người, với điểm nhấn bo dệt kẻ nổi bật.</span>
                            </div>
                            <div class="container-content_product-detail-characteristics-list-item">
                                <div class="tick">
                                    <img
                                        src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/tick-line.svg" />
                                </div>
                                <span>Mặc cùng quần âu, jeans, short và trong nhiều hoàn cảnh như
                                    đi làm, đi học, đi chơi...</span>
                            </div>
                            <div class="container-content_product-detail-characteristics-list-item">
                                <div class="tick">
                                    <img
                                        src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/tick-line.svg" />
                                </div>
                                <span>YODY - Look good. Feel good.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php }?>
        <div class="container-detail">
            <h1>Chi tiết sản phẩm</h1>
            <div class="container-detail-img">
                <?php
                            foreach ($allImages as $key => $images) {
                                if ($images->product_id === $pro->id) {
                ?>
                <div><img src="<?php echo base_url('frontend/img/' . $images->image); ?>" /></div>
                <!-- <div><img src="frontend/img/atm5149-den-10.webp" /></div>
                <div><img src="frontend/img/atm5149-den-5.webp" /></div>
                <div><img src="frontend/img/atm5149-den-8.webp" /></div> -->
                <?php } } ?>
            </div>
            <div class="detail-more">
                MUA NGAY ĐỂ SỞ HỮU THIẾT KẾ ĐỘC ĐÁO MỚI NÀY!
            </div>
            <button class="read-detail">
                <span class="read-more">
                    Đọc thêm
                    <div><i class="fa-solid fa-angle-down"></i></div>
                </span>
                <span class="read-less">
                    Thu gọn
                    <div><i class="fa-solid fa-angle-up"></i></div>
                </span>
            </button>
        </div>
        <div class="products-review">
            <h1>ĐÁNH GIÁ ÁO POLO NAM PIQUE SỒI</h1>
            <div class="products-review-container">
                <span>Hiện tại sản phẩm chưa có đánh giá nào, bạn hãy trở thành người
                    đầu tiên đánh giá cho sản phẩm này</span>
                <button class="send-review">Gửi đánh giá của bạn</button>
            </div>
        </div>
        <div class="maybe-buy-more">
            <h1 class="maybe-buy-more-title">Có thể bạn muốn mua</h1>
            <div class="products-suggest">
                <div class="grid wide">
                    <div class="row">
                        <?php 
                        foreach($allProducts as $key => $allpro){
                    ?>
                        <div class="col l-2-4 m-4 c-6">
                            <a href="<?php echo base_url('product/'.$allpro->id);?>" class="products_items">
                                <div class="products_items-card">
                                    <div class="products_items-card-img">
                                        <img src="<?php echo base_url('frontend/img/'.$allpro->images);?>" />
                                        <button class="btn-buy"></button>
                                        <div class="amount-sold">Đã bán <span>4.4K</span></div>
                                    </div>
                                    <h1 class="products_items-card-name">
                                        <?php echo $allpro->name; ?>
                                    </h1>
                                    <div class="products_items-card-price">
                                        <span
                                            class="new-price"><?php echo number_format($allpro->price,0,',','.'); ?>đ</span>
                                        <!-- <span class="old-price">499.000đ</span> -->
                                    </div>
                                    <div class="products_items-card-option">
                                        <?php 
                                    foreach($allColors as $key => $colors){
                                        if($colors->product_id === $allpro->id){
                                ?>
                                        <div class="products_items-card-option-img">
                                            <img src="<?php echo base_url('frontend/img/'.$colors->color);?>" />
                                        </div>
                                        <!-- <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div> -->
                                        <?php 
                                        }
                                    } 
                                ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="col l-2-4 m-4 c-6">
                            <a href="#" class="products_items">
                                <div class="products_items-card">
                                    <div class="products_items-card-img">
                                        <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp" />
                                        <button class="btn-buy"></button>
                                    </div>
                                    <h1 class="products_items-card-name">
                                        Áo Đôi - Polo Cafe Phối Nẹp
                                    </h1>
                                    <div class="products_items-card-price">329.000đ</div>
                                    <div class="products_items-card-option">
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <a href="#" class="products_items">
                                <div class="products_items-card">
                                    <div class="products_items-card-img">
                                        <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp" />
                                        <button class="btn-buy"></button>
                                    </div>
                                    <h1 class="products_items-card-name">
                                        Áo Đôi - Áo Polo Thể Thao Active Melange In Phản Quang
                                    </h1>
                                    <div class="products_items-card-price">329.000đ</div>
                                    <div class="products_items-card-option">
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <a href="#" class="products_items">
                                <div class="products_items-card">
                                    <div class="products_items-card-img">
                                        <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp" />
                                        <button class="btn-buy"></button>
                                    </div>
                                    <h1 class="products_items-card-name">
                                        Áo Đôi - Áo Polo Thể Thao Active Melange In Phản Quang
                                    </h1>
                                    <div class="products_items-card-price">329.000đ</div>
                                    <div class="products_items-card-option">
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <a href="#" class="products_items">
                                <div class="products_items-card">
                                    <div class="products_items-card-img">
                                        <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp" />
                                        <button class="btn-buy"></button>
                                    </div>
                                    <h1 class="products_items-card-name">
                                        Áo Đôi - Áo Polo Thể Thao Active Melange In Phản Quang
                                    </h1>
                                    <div class="products_items-card-price">329.000đ</div>
                                    <div class="products_items-card-option">
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <a href="#" class="products_items">
                                <div class="products_items-card">
                                    <div class="products_items-card-img">
                                        <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp" />
                                        <button class="btn-buy"></button>
                                    </div>
                                    <h1 class="products_items-card-name">
                                        Áo Đôi - Áo Polo Thể Thao Active Melange In Phản Quang
                                    </h1>
                                    <div class="products_items-card-price">
                                        <span class="new-price">329.000đ</span>
                                        <span class="old-price">499.000đ</span>
                                    </div>
                                    <div class="products_items-card-option">
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <a href="#" class="products_items">
                                <div class="products_items-card">
                                    <div class="products_items-card-img">
                                        <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp" />
                                        <button class="btn-buy"></button>
                                    </div>
                                    <h1 class="products_items-card-name">
                                        Áo Đôi - Polo Cafe Phối Nẹp
                                    </h1>
                                    <div class="products_items-card-price">329.000đ</div>
                                    <div class="products_items-card-option">
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <a href="#" class="products_items">
                                <div class="products_items-card">
                                    <div class="products_items-card-img">
                                        <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp" />
                                        <button class="btn-buy"></button>
                                    </div>
                                    <h1 class="products_items-card-name">
                                        Áo Đôi - Áo Polo Thể Thao Active Melange In Phản Quang
                                    </h1>
                                    <div class="products_items-card-price">329.000đ</div>
                                    <div class="products_items-card-option">
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <a href="#" class="products_items">
                                <div class="products_items-card">
                                    <div class="products_items-card-img">
                                        <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp" />
                                        <button class="btn-buy"></button>
                                    </div>
                                    <h1 class="products_items-card-name">
                                        Áo Đôi - Áo Polo Thể Thao Active Melange In Phản Quang
                                    </h1>
                                    <div class="products_items-card-price">329.000đ</div>
                                    <div class="products_items-card-option">
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col l-2-4 m-4 c-6">
                            <a href="#" class="products_items">
                                <div class="products_items-card">
                                    <div class="products_items-card-img">
                                        <img src="frontend/img/sam5009-ddo-san5004-ddo-3.webp" />
                                        <button class="btn-buy"></button>
                                    </div>
                                    <h1 class="products_items-card-name">
                                        Áo Đôi - Áo Polo Thể Thao Active Melange In Phản Quang
                                    </h1>
                                    <div class="products_items-card-price">329.000đ</div>
                                    <div class="products_items-card-option">
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                        <div class="products_items-card-option-img">
                                            <img src="frontend/img/sam5009-den-san5004-den-2.webp" />
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> -->
                        <?php }?>
                    </div>

                </div>
            </div>
        </div>
    </div>