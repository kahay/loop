<?php
   /*
    Template Name: Cat
   */
   get_header();
   /*
      Setting up post data of Category parent page (id 204),
      so Gutenberg content is always reachable
   */
    if ( have_posts() ) {
        wp_reset_query();
        setup_postdata(204);
        echo esc_attr(htmlentities(the_content()));
    } else {
        echo "TODO: 404 - Brak produktow o takiej kategorii.";
    };
wp_reset_postdata();
get_footer();
?>
