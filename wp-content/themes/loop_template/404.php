
<?php
  /* Template Name: 404 */
  get_header();
?>

    <section class="not-found-page">
        <div class="container">
            <div class="row">
                <div class="col-auto left-img">
                    <img  src="<?php echo get_template_directory_uri(); ?>/dist/images/dino.png" alt="">
                </div>
                <div class="col-auto right-text">
                    <span class="big-text">
                        <?php
                            echo '404'
                        ?>
                    </span>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/dino.png" alt="">
                    <p class="text-up">Ups.. Strona nie istnieje!</p>
                    <p>Strona nie istnieje, bądź została usunięta<br>
                        Spróbuj powrócić na stronę główną.</p>
                    <a href="<?php echo get_template_directory_uri(); ?>" class="btn btn-big">wróć na stronę główną</a>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
