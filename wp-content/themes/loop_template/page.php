<?php get_header();

  /* GET BANNER.PHP */
  get_template_part('template-parts/banner-page');
?>

<main class="privacy-policy">
  <div class="container">
  <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
      <p class="superheader">OSTATNIA MODYFIKACJA <?php echo the_modified_date(); ?><p>
      <p class="header"><?php the_title(); ?></p>

      <div class="text">
        <?php echo the_content(); ?>
      </div>
  </div>
  <?php
    } // end while
  } // end if
 ?>
</main>

<?php get_footer(); ?>
