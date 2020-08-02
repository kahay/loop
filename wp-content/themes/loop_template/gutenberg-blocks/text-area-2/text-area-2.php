<section class="background-text">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <span class="superheader">
                    <?php echo the_field('heading_1'); ?>
                </span>
                <h4 class="header">
                    <?php echo the_field('heading_2'); ?>
                </h4>
                <div class="paragraph">
                    <?php echo esc_html(the_field('content')); ?>
                </div>
            </div>
        </div>
    </div>
</section>
