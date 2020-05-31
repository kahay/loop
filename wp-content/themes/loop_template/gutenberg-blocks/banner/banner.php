<?php
    $bannerDefaultImage = get_field('cat_img', 'options');
    $args = array(
        'child_of' => $cat,
        'orderby' => 'name',
        'order' => 'ASC'
        );
    $currentCat = get_queried_object();
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
        <?php
        if($currentCat->parent){ ?>
            <h2>
                <?php echo get_category($currentCat->parent)->name; ?>
            </h2>
            <h1>
                <strong>
                     <?php echo get_category($currentCatId)->cat_name; ?>
                </strong>
            </h1>
        <?php }else{ ?>
            <h1>
                <strong>
                    <?php echo get_category($currentCatId)->cat_name; ?>
                </strong>
            </h1>
        <?php } ?>
    </header>
</div>
