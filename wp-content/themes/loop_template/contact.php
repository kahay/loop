<?php 
  /* Template Name: Kontakt */
  get_header();
?>

<!-- GET MAP.php -->
<?php get_template_part('template-parts/map'); ?>

<main class="contact-page">
  <div class="container">
    <p class="superheader">Kontakt</p>
    <p class="header">Skontaktuj się!</p>
    <div class="row">
      <div class="col-md-6">
          <!-- GET CONTACT-FORM.php -->
          <?php get_template_part('template-parts/contact', 'form'); ?>
        </div> 
        <div class="offset-md-1 col-md-5">
          <!-- GET CONTACT-DATA.php -->
          <?php get_template_part('template-parts/contact', 'data'); ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>