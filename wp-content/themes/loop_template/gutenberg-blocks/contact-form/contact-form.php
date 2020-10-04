<section class="home-contact-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="superheader">
                    <?php echo get_field('heading_1'); ?>
                </p>
                <p class="header">
                    <?php echo get_field('heading_2'); ?>
                </p>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="256" title="Contact form 1"]'); ?>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-5">
                <div class="contact-data">
                    <p class="header-contact">Telefon</p>
                    <p class="text-contact"><?php echo get_field('phone'); ?></p>
                </div>

                <div class="contact-data">
                    <p class="header-contact">Email</p>
                    <p class="text-contact"><?php echo get_field('email') ?></p>
                </div>

                <div class="contact-data">
                    <p class="header-contact">Adres</p>
                    <div class="text-contact">
                        <?php echo get_field('address'); ?>
                    </div>
                </div>

                <div class="contact-data">
                    <p class="header-contact">Social media</p>
                    <div class="text-contact">
                        <?php echo the_field('social_media'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
