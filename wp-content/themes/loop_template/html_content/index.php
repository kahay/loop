
<?php include 'modules\head.php'; ?>
    <?php echo'

        <main class="home">

    '?>
            <?php include 'modules\menu.php'; ?>
            <?php include 'modules\homepage-slider.php'; ?>
            <?php include 'modules\text-area.php'; ?>
            <?php include 'modules\testimonials.php'; ?>
            <?php include 'modules\photo-text.php'; ?>
            <?php include 'modules\background-text.php'; ?>

            <?php echo'

        <section class="home-contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="superheader">Kontakt</p>
                        <p class="header">Skontaktuj się!</p>
                    </div>
                    <div class="col-md-6">
                        '?>
                        <?php include 'modules\contact-form.php'; ?>
                        <?php echo'
                        </div> 
                        <div class="offset-md-1 col-md-5">
  
                        '?>
                        <?php include 'modules\contact-data.php'; ?>
                        <?php echo'
                    </div>
                </div>
            </div>
        </section>
            
            '?>



    <?php echo'

        


        </main>
    '?>

<?php include 'modules\footer.php'; ?>






