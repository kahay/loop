<div class="homepage-slider">
    <?php
        if( have_rows('main_slider') ): ?>
            <div class="slider swiper-container swiper-container-homepage">
                <div class="swiper-wrapper">
                    <?php
                        while ( have_rows('main_slider') ) : the_row();
                    ?>
                        <div class="slider swiper-slide" style="background-image: url(<?php echo the_sub_field('background'); ?>)">
                            <header itemscope itemtype="http://schema.org/WPHeader">
                                <h1><strong><?php the_sub_field('title') ?></strong></h1>
                            </header>
                        </div>
                    <?php
                        endwhile;
                    ?>
                </div>
                <div class="swiper-pagination"></div>
                <!-- If we need pagination -->
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
    <?php
        else :
            echo 'TODO: Block not found';
        endif;
    ?>
</div>
