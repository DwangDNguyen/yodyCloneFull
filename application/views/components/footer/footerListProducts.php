<div class="footer">
    <div class="footer-container">
        <div class="logo-footer">
            <img src="<?php echo base_url('frontend/img/logo_footer.webp'); ?>">
        </div>
        <div class="footer-container-col respon-tablet-1">
            <p>“Đặt sự hài lòng của khách hàng là ưu tiên số 1 trong mọi suy nghĩ hành động của mình” là
                sứ mệnh, là triết lý, chiến lược.. luôn cùng YODY tiến bước”</p>
            <h1>
                ĐĂNG KÝ NHẬN THÔNG TIN
            </h1>
            <div class="footer-input">
                <input type="text" placeholder="Nhập email đăng ký của bạn">
                <div class="footer-input-submit">
                    Đăng ký
                </div>
            </div>
            <div class="footer-social">
                <a href="" class="footer-social-link">
                    <img src="<?php echo base_url('frontend/img/social_1.webp'); ?>">
                </a>
                <a href="" class="footer-social-link">
                    <img src="<?php echo base_url('frontend/img/social_2.webp'); ?>">
                </a>
                <a href="" class="footer-social-link">
                    <img src="<?php echo base_url('frontend/img/social_3.webp'); ?>">
                </a>
                <a href="" class="footer-social-link">
                    <img src="<?php echo base_url('frontend/img/social_4.webp'); ?>">
                </a>
                <a href="" class="footer-social-link">
                    <img src="<?php echo base_url('frontend/img/social_5.webp'); ?>">
                </a>
                <a href="" class="footer-social-link">
                    <img src="<?php echo base_url('frontend/img/social_6.webp'); ?>">
                </a>
                <a href="" class="footer-social-link">
                    <img src="<?php echo base_url('frontend/img/social_7.webp'); ?>">
                </a>
                <a href="" class="footer-social-link">
                    <img src="<?php echo base_url('frontend/img/social_8.webp'); ?>">
                </a>
            </div>
        </div>
        <div class="footer-container-col respon-tablet-2">
            <h3>VỀ YODY</h3>
            <span class="footer-container-col-items">Giới thiệu</span></br>
            <span class="footer-container-col-items">Liên hệ</span></br>
            <span class="footer-container-col-items">Tuyển dụng</span></br>
            <span class="footer-container-col-items">Tin tức</span></br>
            <span class="footer-container-col-items">Hệ thống cửa hàng</span>
        </div>
        <div class="footer-container-col respon-tablet-3">
            <h3>Hỗ trợ khách hàng</h3>
            <span class="footer-container-col-items">Hướng dẫn chọn size</span></br>
            <span class="footer-container-col-items">Chính sách khách hàng thân thiết</span></br>
            <span class="footer-container-col-items">Chính sách đổi/trả</span></br>
            <span class="footer-container-col-items">Chính sách bảo mật</span></br>
            <span class="footer-container-col-items">Thanh toán, giao nhận</span></br>
            <span class="footer-container-col-items">Chính sách Đồng phục</span>
        </div>
        <div class="footer-container-col respon-tablet-4">
            <div class="footer-container-col-info">
                <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/map.svg?1663149672952">
                <div class="footer-container-col-info-text">
                    Công ty cổ phần Thời trang YODY </br>
                    Mã số thuế: 0801206940 </br>
                    Địa chỉ: Đường An Định - Phường Việt Hòa - Thành phố Hải Dương - Hải Dương
                </div>
            </div>
            <div class="footer-container-col-info">
                <img src="<?php echo base_url('frontend/img/icon_address.webp') ?>">
                <div class="footer-container-col-info-text">
                    Tìm cửa hàng gần bạn nhất
                </div>
            </div>
            <div class="footer-container-col-info">
                <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/phone.svg?1663149672952">
                <div class="footer-container-col-info-text">
                    Liên hệ đặt hàng: 024 9996 6868 </br>
                    Thắc mắc đơn hàng: 024 9996 6868 </br>
                    Góp ý khiếu nại: 1800 2086
                </div>
            </div>
            <div class="footer-container-col-info">
                <img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/email.svg?1663149672952">
                <div class="footer-container-col-info-text">
                    Email: chamsockhachhang@yody.vn
                </div>
            </div>
            <div class="footer-container-col-info">
                <img src="<?php echo base_url('frontend/img/logo_bct.webp'); ?>">
            </div>
        </div>
    </div>
    <div class="copyright">
        @ Bản quyền thuộc về <span>Yody.vn</span> All right reserved
    </div>
</div>
<a href="#" class="to-top">
    <i class="fa-solid fa-arrow-up"></i>
</a>
</div>
<script src="<?php echo base_url('frontend/js/listProducts.js'); ?>"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script>
$(document).ready(function() {
    filter_data(1);


    function filter_data(page) {

        var action = 'fetch_data';
        var color = get_filter('color');
        var size = get_filter('size');
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();



        $.ajax({
            url: "<?php echo base_url(); ?>category/" + "<?php echo $slug ?>" + "/" +
                page,
            method: "POST",
            dataType: "JSON",
            data: {
                action: action,
                color: color,
                size: size,
                minimum_price: minimum_price,
                maximum_price: maximum_price,

            },
            success: function(data) {
                $('.row').html(data.product_list);

                // console.log(data.product_list);
                $('.pagination_link').html(data.pagination_link);
            }
        })
    }

    function get_filter(class_name) {
        var filter = [];
        $('.' + class_name + ':checked').each(function() {
            filter.push($(this).val());
        });
        console.log(filter);
        return filter;
    }

    function get_slug(class_name) {
        var slug = [];
        $('.' + class_name + ':checked').each(function() {
            slug.push($(this).val());
        });
        console.log(slug);
        return slug;
    }
    $(document).on('click', '.pagination li a', function(event) {
        event.preventDefault();
        var page = $(this).data('ci-pagination-page');
        filter_data(page);
    });
    $('.color-option-checkbox').click(function() {
        filter_data(1);
    });


    $('#price_range').slider({
        range: true,
        min: 1000,
        max: 999999,
        values: [1000, 999999],
        step: 1000,
        stop: function(event, ui) {
            $('#price_show').html(ui.values[0] + 'đ - ' + ui.values[1] + 'đ');
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data(1);
        }

    });

})
</script>
</body>

</html>