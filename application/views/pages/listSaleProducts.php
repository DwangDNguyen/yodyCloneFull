<div class="container">
    <h1 class="title-list-all-products">Sản Phẩm Giảm Giá</h1>
    <div class="products">
        <div class="grid wide">
            <div class="row">
                <?php
foreach ($allproductsale_pagination as $key => $allpro) {
    ?>
                <div class="col l-2-4 m-4 c-6">
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
        <?php echo $links; ?>
    </div>