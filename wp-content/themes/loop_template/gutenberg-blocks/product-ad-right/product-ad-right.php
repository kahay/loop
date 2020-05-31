<?php
    $prodId = get_field_object('product')['value']->ID;
       $prodCategoryId = get_field('product_category', $prodId)[0];
       $prod = get_field_object('product')['value'];
       $prodCatId = $prod->ID;
       $prodCat = get_the_category($prodCatId);
       $isCustomDesc = get_field('product_is_custom_desc');
       $customDesc = false;
       if($isCustomDesc){
          $customDesc = get_field('product_custom_desc');
       }
?>
<section class="photo-text">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <h2 class="superheader">
                    <a href="<?php echo get_category_link( $prodCategoryId ); ?>">
                        <?php echo esc_attr(htmlentities(get_cat_name($prodCategoryId))); ?>
                    </a>
                </h2>
                <h3 class="header"><?php echo get_field('product_name', $prodId); ?></h3>
                <p><?php if($isCustomDesc){
                              echo $customDesc;
                            }else{
                              echo get_field('product_description', $prodId);
                            } ?></p>
                <span class="btn btn-big">
                        <a href="<?php echo get_post_permalink($prod->ID);?>">
                            zobacz
                        </a>
                    </span>
            </div>

            <div class="col-md-6">
                <figure>
                    <img
                        src="<?php echo get_field('product_main_photo', $prodId)['url']; ?>"
                        alt="<?php echo get_field('product_main_photo', $prodId)['alt']; ?>">
                </figure>
            </div>
        </div>
    </div>
</section>
