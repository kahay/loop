<?php
    /* Template Name: Home */
    get_header();
?>
<main class="home">
    <?php
        if ( have_posts() ) {
            wp_reset_query();
            setup_postdata($post);
            echo esc_attr(htmlentities(the_content()));
        } else {
            echo "TODO: 404 - to wyskoczy jesli nie dasz modulow dla podstrony home";
        };
    ?>
</main>
<?php get_footer(); ?>
