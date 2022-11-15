<div class="container">
    <div class="checkout-information">
        <a href="<?php echo base_url('');?>" class="logo">
            <img src="<?php echo base_url('frontend/img/logo.webp'); ?>">
        </a>
        <div class="form-checkout">
            <h1>Thông tin giao hàng</h1>
            <?php 
            if($this->session->flashdata('success')){
            ?>
            <div class="modal"></div>
            <div class="success">
                <div class="icon-success"><i class="fa-solid fa-circle-check"></i></div>
                <span><?php echo $this->session->flashdata('success') ?></span>
                <a href="<?php echo base_url('');?>">Quay lại trang chủ</a>
            </div>
            <?php
            }elseif($this->session->flashdata('error')){
            ?>
            <div class="wrong">
                <?php echo $this->session->flashdata('error') ?>
            </div>
            <?php } ?>
            <form method="POST" action="<?php echo base_url('confirm-checkout');?>" id="form-confirm-checkout">
                <input type="text" class="form-input" name="name" placeholder="Họ và tên" />
                <div class="error"><?php echo form_error('name'); ?></div>
                <input type="number" class="form-input" name="phone" placeholder="Số điện thoại" />
                <div class="error"><?php echo form_error('phone'); ?></div>
                <input type="text" class="form-input" name="address" placeholder="Địa chỉ" />
                <div class="error"><?php echo form_error('address'); ?></div>

                <h2 class="pay-text">Thanh toán</h2>
                <div>
                    <div class="options">
                        <input type="radio" class="pay-option" id="VNPAY" value="VNPAY" name="pay-option" />
                        <label for="VNPAY">
                            <span>Thanh toán qua thẻ thanh toán, ứng dụng ngân hàng VNPAY</span>
                            <div><img src="<?php echo base_url('frontend/img/payment_icon_vnpay.webp'); ?>"></div>
                        </label>
                    </div>
                    <div class="options">
                        <input type="radio" class="pay-option" id="QR-VNPAY" value="QR-VNPAY" name="pay-option" />
                        <label for="QR-VNPAY">
                            <span>Thanh toán qua mã QR - VNPAY</span>
                            <div><img src="<?php echo base_url('frontend/img/vnpayqr-icon.webp'); ?>"></div>
                        </label>
                    </div>
                    <div class="options">
                        <input type="radio" class="pay-option" id="MOMO" value="MOMO" name="pay-option" />
                        <label for="MOMO">
                            <span>Thanh toán qua Ví MoMo</span>
                            <div><img src="<?php echo base_url('frontend/img/logomm1.webp'); ?>"></div>
                        </label>
                    </div>
                    <div class="options">
                        <input type="radio" class="pay-option" id="COD" value="COD" name="pay-option" />
                        <label for="COD">
                            <span>Thanh toán khi nhận hàng (COD)</span>
                            <div><i class="fa-solid fa-money-bill"></i></div>
                        </label>
                    </div>
                </div>
                <div class="error"><?php echo form_error('method'); ?></div>
            </form>
        </div>
        <div class="terms-of-use">
            <a>Điều khoản sử dụng</a>
        </div>
        <div class="note">
            <span>Sau khi hoàn tất đơn hàng khoảng 60-90 phút (trong giờ hành chính), YODY sẽ nhanh chóng gọi điện xác
                nhận lại thời gian giao hàng với bạn. YODY xin cảm ơn!</span>
        </div>
    </div>
    <div class="cart-items">
        <h1>Đơn hàng (<?= count($this->cart->contents());?> sản phẩm)</h1>
        <?php 
        if($this->cart->contents()){ 
        ?>
        <div class="list-products">
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
                    <div class="info">
                        <div class="product-info">
                            <span class="product-name"><?php echo $items['name']; ?></span>
                            <span class="product-cate">
                                <span class="product-color"><?php echo $items['options']['color']; ?></span>
                                /
                                <span class="product-size"><?php echo $items['options']['size']; ?></span>
                            </span>
                        </div>

                        <div class="controll-amount">
                            <!-- <input type="hidden"> -->
                            <!-- <button class="btn-qty desc" data="<?=$items['id'];?>">-</button> -->
                            <!-- <input type="text" class="amount" id="amount" data="<?=$items['id'];?>" name="quantity"
                                            value="<?php echo $items['qty']; ?>" /> -->
                            <span>Số lượng: <?php echo $items['qty']; ?></span>
                            <!-- <button class="btn-qty incr" data="<?=$items['id'];?>">+</button> -->
                        </div>
                    </div>
                    <div class="total-product-price">
                        <span><?php echo number_format($subtotal,0,',','.'); ?>đ</span>
                    </div>

                </div>
            </div>
            <?php } ?>
        </div>
        <div class="total-price">
            <h1>Tổng cộng</h1>
            <span><?php echo number_format($total,0,',','.'); ?>đ</span>
        </div>
        <div class="order">
            <a href="<?php echo base_url('cart'); ?>">
                Quay về giỏ hàng
            </a>
            <button type="submit" form="form-confirm-checkout">Đặt hàng</button>
        </div>
    </div>
</div>
<?php } ?>