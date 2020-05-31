<?php get_template_part('template-parts/product-view-head'); ?>
    <main class="product-view-page">
        <?php
            /* GET BANNER.php */
            get_template_part('template-parts/baner');

            /* GET BREADCRUMBS.php */
            get_template_part('template-parts/breadcrumbs'); 
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- GET SIDEBAR.php -->
                    <?php get_template_part('template-parts\sidebar'); ?>
                </div>
                <div class="col-md-9">
                    <!-- GET PRODUCT-VIEW.php -->
                    <?php get_template_part('template-parts\product', 'view'); ?>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>




