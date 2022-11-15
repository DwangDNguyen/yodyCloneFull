<div class="container">
    <div class="modal-overlay"></div>
    <div class="cart-section-container">
        <?php if($this->cart->contents()){ ?>
        <div class="cart-container-content">
            <div class="cart-products">
                <div class="cart-products-title">
                    <span>Giỏ hàng</span>
                </div>
                <div class="cart-products-list">
                    <div class="cart-products-list-title">
                        <span>Sản phẩm</span>
                        <span>Đơn giá</span>
                        <span>Số lượng</span>
                        <span>Thành tiền</span>
                    </div>
                    <?php
                        
                        $subtotal = 0;
                        $total = 0;
                        foreach($this->cart->contents() as $items){ 
                            $subtotal = $items['qty'] * $items['price'];
                            $total+= $subtotal;
                    ?>
                    <div class="product">
                        <div class="img-product">
                            <img src="<?php echo base_url('frontend/img/'.$items['options']['image']) ?>">
                        </div>
                        <div class="cart-products-item">
                            <div class="product-info">
                                <span class="product-name"><?php echo $items['name']; ?></span>
                                <span class="product-cate">
                                    <span class="product-color"><?php echo $items['options']['color']; ?></span>
                                    /
                                    <span class="product-size"><?php echo $items['options']['size']; ?></span>
                                </span>
                            </div>
                            <div class="product-price">
                                <span><?php echo number_format($items['price'],0,',','.'); ?></span>đ

                            </div>
                            <div class="controll-amount">
                                <!-- <input type="hidden"> -->
                                <!-- <button class="btn-qty desc" data="<?=$items['id'];?>">-</button> -->
                                <!-- <input type="text" class="amount" id="amount" data="<?=$items['id'];?>" name="quantity"
                                    value="<?php echo $items['qty']; ?>" /> -->
                                <span class="amount-web"><?php echo $items['qty']; ?></span>
                                <span class="amount-res">Số lượng: <?php echo $items['qty']; ?></span>

                                <!-- <button class="btn-qty incr" data="<?=$items['id'];?>">+</button> -->
                            </div>
                            <div class="total-product-price">
                                <span><?php echo number_format($subtotal,0,',','.'); ?></span>đ
                            </div>
                            <a class="delete-item" href="<?php echo base_url('delete-item/'.$items['rowid']) ?>">
                                <img
                                    src="https://bizweb.dktcdn.net/100/438/408/themes/878697/assets/trash_new.svg?1665045724173">
                            </a>
                        </div>

                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="cart-pay">
                <div class="cart-pay-container">
                    <div class="price-total">
                        <span class="price-title">Tổng đơn hàng (Tạm tính): </span>
                        <span class="price"><?php echo number_format($total,0,',','.'); ?>đ</span>
                    </div>
                    <?php if($this->session->userdata('LoggedIn')){ ?>
                    <a class="pay-button" href="<?php echo base_url('checkout'); ?>">Thanh toán</a>
                    <?php } else { ?>
                    <a class="pay-button" href="<?php echo base_url('login'); ?>">Thanh toán</a>
                    <?php } ?>
                    <span class="attention">Dùng mã giảm giá của YODY trong bước tiếp theo</span>
                </div>
                <div class="cart-policy">
                    <div>
                        <img
                            src="https://bizweb.dktcdn.net/100/438/408/themes/878697/assets/icon-tu-van.svg?1664853877581">
                    </div>
                    <span>Yên tâm thanh toán! Nhân viên tư vấn YODY sẽ gọi điện ngay để hỗ trợ bạn hoàn tiền giảm
                        giá</span>
                </div>
            </div>
        </div>
        <?php } else{ ?>
        <div class="cart-container-empty">
            <div>
                <img src="https://bizweb.dktcdn.net/100/438/408/themes/878697/assets/blank_cart.svg?1664853877581">
            </div>
            <span>Giỏ hàng của bạn trống</span>
        </div>
        <?php } ?>
    </div>