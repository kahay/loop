<section class="testimonials">
<?php
    if( have_rows('about_company_section') ): ?>
            <div class="container">
                <div class="row">
                    <?php
                        while ( have_rows('about_company_section') ) : the_row();
                    ?>
                         <div class="col-lg-4 item">
                           <div class="circle">
                                <img src="<?php echo the_sub_field('icon'); ?>">
                           </div>
                           <h4><?php the_sub_field('heading'); ?></h4>
                           <?php the_sub_field('contentt'); ?>
                        </div>
                    <?php
                        endwhile;
                    ?>
                </div>
           </div>
<?php
    else :
        echo 'TODO: 404 - Block not found';
    endif;
?>
</section>

