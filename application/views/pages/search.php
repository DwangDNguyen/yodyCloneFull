<div class="container">
    <div class="title-search">
        <a href="<?php echo base_url('');?>">Trang chủ /</a>
        <span>Tìm kiếm</span>
    </div>
    <h1 class="text-result-search">KẾT QUẢ TÌM KIẾM SẢN PHẨM "<?php echo $searchText; ?>"</h1>
    <div class="products">
        <div class="grid wide">
            <div class="row">
                <?php 
                    foreach($products as $key => $allpro){
                ?>
                <div class="col l-2-4 m-4 c-6">
                    <a href="<?php echo base_url('product/'.$allpro->id);?>" class="products_items">
                        <div class="products_items-card">
                            <div class="products_items-card-img">
                                <img src="<?php echo base_url('frontend/img/'.$allpro->images);?>">
                                <button class="btn-buy"></button>
                            </div>
                            <h1 class="products_items-card-name"><?php echo $allpro->name; ?></h1>
                            <div class="products_items-card-price">
                                <?php echo number_format($allpro->price,0,',','.'); ?>đ
                            </div>
                            <div class="products_items-card-option">
                                <?php 
                                    foreach($allColors as $key => $colors){
                                        if($colors->product_id === $allpro->id){
                                ?>
                                <div class="products_items-card-option-img">
                                    <img src="<?php echo base_url('frontend/img/'.$colors->color);?>">
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
                <?php } ?>

            </div>
        </div>
    </div>
</div>