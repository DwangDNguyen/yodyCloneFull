<div class="container">
    <h1>Danh mục</h1>
    <div class="category-container">
        <?php foreach ($main_category as $key => $mainCate) {?>
        <div class="category-option">
            <?php if ($mainCate->name == 'Bộ sưu tập') {?>
            <a class="main-category" href="<?php echo base_url('listAllProducts'); ?>">
                <?php echo $mainCate->name; ?>
            </a>
            <?php } else if ($mainCate->name == 'Tin tức') {?>
            <a class="main-category" href="">
                <?php echo $mainCate->name; ?>
            </a>
            <?php } else {?>
            <div class="main-category more">
                <span> <?php echo $mainCate->name; ?>
                </span>
                <div class="icon">
                    <div class="up"><i class="fa-solid fa-angle-up"></i></div>
                    <div class="down"><i class="fa-solid fa-angle-down"></i></div>
                </div>
            </div>
            <?php }?>
            <?php if ($mainCate->status == 1) {?>
            <div class="sub-category show">
                <div class="sub-category-option">
                    <?php foreach ($title_category as $key => $title) {
    if ($title->main_category_id === $mainCate->main_categories_id) {
        ?>
                    <div class="title-category sub-more">
                        <span><a href="#"><?php echo $title->name; ?></a></span>
                        <div class="icon-sub">
                            <div class="up-sub"><i class="fa-solid fa-angle-up"></i></div>
                            <div class="down-sub"><i class="fa-solid fa-angle-down"></i></div>
                        </div>
                    </div>

                    <div class="category sub-show">
                        <?php foreach ($categoryNam as $key => $cateNam) {
            if ($cateNam->cate == $title->name && $cateNam->main_categories_id == $mainCate->main_categories_id) {
                ?>
                        <a class="category-item" href="<?php echo base_url('category/' . $cateNam->slug) ?>">
                            <?php echo $cateNam->name; ?> <?php echo $mainCate->name; ?>
                        </a>
                        <?php }}?>
                    </div>

                    <?php }}?>
                </div>
            </div>
            <?php }?>
        </div>
        <?php }?>

    </div>