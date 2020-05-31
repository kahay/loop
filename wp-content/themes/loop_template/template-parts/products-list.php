<?php
   $currentCat = get_queried_object();
   $currentCatId = $currentCat->term_id;
   $currentCatParentId = $currentCat->parent;
?>
<div class="products-list">
    <div class="row">
    <?php
        $loop = new WP_Query(
            array(
                'post_type' => 'products',
                'posts_per_page' => 2,
                'cat' => $currentCatId
            )
        );
        while ( $loop->have_posts() ) : $loop->the_post();
        $ID = get_the_ID();
        $prodImageId = get_post_meta( $ID, 'product_main_photo', true);
        $postMeta = get_post_meta( $ID );
    ?>
    <div class="col-sm-4">
        <a href="<?php echo the_permalink(); ?>" class="item">
            <div class="img-wrapper">
                <img
                    src="<?php echo wp_get_attachment_image_src($prodImageId)[0] ?>"
                    alt="<?php echo get_post_meta($prodImageId, '_wp_attachment_image_alt', TRUE) ?>"
                />
            </div>
            <h3>
                <?php echo $postMeta['product_name'][0]; ?>
            </h3>
            <span class="price">
                 <?php echo $postMeta['product_details_price'][0]; ?>
                 PLN
            </span>
            <span class="netto"> NETTO</span>
            <?php if($postMeta['product_details_discount']) : ?>
                   <span class="discount">
                       <?php echo $postMeta['product_details_discount'][0]; ?> PLN
                   </span>
            <?php endif; ?>
            <span class="btn btn-small">
                zobacz więcej
            </span>
        </a>
    </div>
    <?php
        endwhile;
        wp_reset_postdata();
    ?>
    </div>
</div>
