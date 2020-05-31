<?php
    $logoUrl = get_field('footer_logo', 'options');
    $infoArr = get_field('footer_info', 'option');
    $displayFooterMenu = get_field('display_footer_menu', 'options');
?>

<footer itemscope itemtype="http://schema.org/WPFooter">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/dist/images/loop-logo-footer.svg" alt="logo">
      </div>

      <div class="col-md-4" >
        <span class="title">
            <p><?php echo $infoArr['address']['address_heading']; ?></p>
        </span>
        <div>
            <?php echo $infoArr['address']['address_text']; ?>
        </div>
        <?php foreach($infoArr['address']['address_socials'] as $val ) : ?>
            <a href="<?php $val['link']; ?>" target="_blank">
                <img src="<?php echo $val['img']; ?>">
            </a>
        <?php endforeach; ?>
      </div>
        <?php 
            if($displayFooterMenu) :
            $footer_menu_title = get_field('footer_menu_title', 'options');
        ?>
        <div class="col-md-4">
            <span class="title"><?php echo $footer_menu_title; ?></span>
            <h2><a href="#">Kasy drukarki fiskalne online</a></h2>
            <h2><a href="#">Kasy i drukarki fiskalne</a></h2>
            <h2><a href="#">Urządzenia niefiskalne</a></h2>
            <h2><a href="#">Terminale płatnicze</a><h2>
            <h2><a href="#">Przywoływacz kelnerski</a></h2>
            <h2><a href="#">Oprogramowanie</a></h2>
            <h2><a href="#">Kontakt</a></h2>
            <h2><a href="#">Polityka prywatności</a></h2>
            <h2><a href="#">Polityka plików cookies</a></h2>
        </div>
        <?php 
            endif;
        ?>
    </div>
  </div>
</footer>
    

    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmwQrDUfWlp8dEKU8PNAwpwa7PLPKzlCc&callback=initMap">
    </script>
    
  <?php wp_footer(); ?>
  </body>
</html>
