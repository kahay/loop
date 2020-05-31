<?php include 'modules\head.php'; ?>
<?php include 'modules\menu.php'; ?>
<?php include 'modules\map.php'; ?>


<?php echo'
  <main class="contact-page">
    <div class="container">
      <p class="superheader">Kontakt</p>
      <p class="header">Skontaktuj się!</p>
      <div class="row">
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
  </main>
'?>
<?php include 'modules\footer.php'; ?>