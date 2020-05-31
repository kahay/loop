    <?php $additionalEquipmentTabsProducts = $productTabs['additional_equipment_tab']['tab_products']; ?>
    <div class="additional-equipment-title">
        <span>Akcesoria</span>
    </div>
    <div class="products-list">
        <div class="row">
            <?php
                foreach($additionalEquipmentTabsProducts as $product):
                $productId = $product->ID;
            ?>
            <div class="col-md-4">
                <a href="<?php echo get_post_permalink($productId); ?>" class="item">
                    <div class="img-wrapper">
                        <img src="<?php echo get_field('product_main_photo', $productId)['url']; ?>" alt="<?php echo get_field('product_main_photo', $productId)['alt']; ?>">
                    </div>
                    <h3><?php echo get_field('product_name', $productId); ?></h3>
                    <span class="price"><?php echo get_field('product_details', $productId)['price']; ?></span><span class="netto"> NETTO</span>
                    <span class="discount"><?php echo get_field('product_details', $productId)['discount']; ?></span>
                    <span class="btn btn-small">zobacz więcej</span>
                </a>
            </div>
            <?php
                endforeach;
            ?>
        </div>
    </div>
