<?php
    $bannerDefaultImage = get_field('cat_img', 'options');
    $args = array(
        'child_of' => $cat,
        'orderby' => 'name',
        'order' => 'ASC'
        );
    $currentCat = get_the_category()[0];
    $currentCatId = $currentCat->term_id;
    $currentCatName = $currentCat->name;
	$categories = get_categories($args);
	/* these variables have to be in loop otherwise it is gonna lose it's scope */
	foreach($categories as $category) {
	    /* if category has specified image set, then override default image */
	    if ($category->term_id == $currentCatId) {
	        $specifiedCatImage = get_field('category_image', 'category_' . $currentCatId);
	        if($specifiedCatImage) $bannerDefaultImage = $specifiedCatImage;
	    }
	};
?>
<div class="baner" style="background-image: url(<?php echo $bannerDefaultImage; ?>)">
    <header itemscope itemtype="http://schema.org/WPHeader">
        <h2>
            <?php echo $currentCatName; ?>
        </h2>
        <h1>
            <strong>
                 <?php echo get_field('product_name'); ?>
            </strong>
        </h1>
    </header>
</div>
