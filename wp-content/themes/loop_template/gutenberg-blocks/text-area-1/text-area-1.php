<section class="text-area">
    <?php 
        $queriedObject = get_queried_object();
        if($queriedObject->taxonomy === 'category' && strlen($queriedObject->description) > 0) : ?>
            <div class="taxonomy_cat_description">
                <div class="container">
                    <p><?php echo $queriedObject->description; ?></p>
                </div>
            </div>
        <?php endif; ?>
    <div class="container">
        <h2 class="superheader">
            <?php echo the_field('heading_1'); ?>
        </h2>
        <h3 class="header">
            <?php echo the_field('heading_2'); ?>
        </h3>
        <p>
            <?php echo the_field('content'); ?>
        </p>
    </div>
</section>
