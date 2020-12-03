<?php get_header(); ?>
    <main class="product-view-page">
        <?php
            /* GET BANNER.php */
            get_template_part('template-parts/banner-single-post');

            /* GET BREADCRUMBS.php */
            if (function_exists('the_breadcrumb')) the_breadcrumb();

            /* GET PRODUCT IMAGES FOR PRODUCT GALLERY */
            $images = get_field('product_gallery');
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-3 d-none d-xl-block">
                    <?php get_template_part('template', 'parts/sidebar'); ?>
                </div>
                <div class="col-xl-9 col-12">
                    <div class="row product-gallery-description">
                        <div class="col-md-12">
                            <h3 class="product-name">
                                <?php echo get_field('product_name'); ?>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <div class="product-gallery">
                              <div class="swiper-container gallery-top" >
                                <div class="swiper-wrapper" id="aniimated-thumbnials">
                                <?php
                                    if( $images ):
                                    foreach( $images as $image ):
                                ?>
                                    <a class="swiper-slide" href="<?php echo $image['url']; ?>">
                                      <img
                                        class="swiper-slide-img"
                                        src="<?php echo $image['url']; ?>"
                                        alt="<?php echo $image['alt']; ?>">
                                    </a>
                                <?php
                                    endforeach;
                                    endif;
                                ?>
                                </div>

                                <!-- Add Arrows -->
                                <div class="swiper-button-next swiper-button-white"></div>
                                    <div class="swiper-button-prev swiper-button-white"></div>
                                </div>
                                <div class="swiper-container gallery-thumbs">
                                  <div class="swiper-wrapper">
                                  <?php
                                        if( $images ):
                                        foreach( $images as $image ):
                                  ?>
                                            <div
                                                class="swiper-slide"
                                                style="background-image:url(<?php echo $image['url']; ?>)"
                                            ></div>
                                  <?php
                                        endforeach;
                                        endif;
                                  ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <section class="product-description">
                            <p class="price-title">Cena netto:</p>
                            <span class="discounted-price">
                                <?php echo get_field('product_details')['price']; ?>
                            </span>
                            <span class="normal-price">
                                <?php echo get_field('product_details')['discount']; ?>
                            </span>
                            <?php
                                $productDetailsParameters = get_field('product_details')['parameters'];
                                if(strlen($productDetailsParameters) > 0) :
                            ?>
                            <div class="product-indexes">
                                <span>
                                    <?php echo $productDetailsParameters; ?>
                                </span>
                            </div>
                            <?php endif; ?>
                            <div class="product-rewards">
                              <?php
                                    $additionalImages = get_field('product_details')['additional_images'];
                                    if( $additionalImages ):
                                    foreach( $additionalImages as $image ):
                              ?>
                                     <img src="<?php echo $image['image']; ?>">
                              <?php
                                    endforeach;
                                    endif;
                              ?>
                            </div>
                        </section>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                            <div id="tab-example" class="tab-container">
                              <ul class="tablist" aria-controls="tab-example" role="tablist">
                                <?php
                                    $productTabs = get_field('tabs');
                                    $tabCounter = 0;
                                    $selectedTabs = $productTabs['product_tabs'];
                                    foreach($selectedTabs as $tab) :
                                ?>
                                    <li class="tab-header" role="tab"
                                        aria-controls="tab-example_<?php echo $tabCounter; ?>"
                                        tabindex="<?php echo $tabCounter; ?>"
                                        aria-selected="false"
                                    >
                                    <?php echo $productTabs[$tab]['tab_title']; ?>
                                    </li>
                                <?php
                                    $tabCounter++;
                                    endforeach;
                                ?>
                              </ul>
                              <main>
                                <?php
                                  $tabContentCounter = 0;
                                  foreach($selectedTabs as $tab) :
                                  $tabName = $productTabs['product_tabs'][$tabContentCounter];
                                  $tabFileName = str_replace('_', '-', $tabName);
                                ?>
                                    <div id="tab-example_<?php echo $tabContentCounter; ?>" class="tab-content <?php echo $tabFileName; ?>" role="tabpanel" aria-expanded="false">
                                          <?php include 'template-parts/tabs/' . $tabFileName . '.php'; ?>
                                    </div>
                                <?php
                                    $tabContentCounter++;
                                    endforeach;
                                ?>
                              </main>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>
