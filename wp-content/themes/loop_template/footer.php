<?php
    $logoUrl = get_field('footer_logo', 'options');
    $infoArr = get_field('footer_info', 'option');
    $displayFooterMenu = get_field('display_footer_menu', 'options');
?>

<footer itemscope itemtype="http://schema.org/WPFooter">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img class="logo" src="<?php echo get_field('logo_footer', 'options')['url']; ?>" alt="<?php echo get_field('logo_footer', 'options')['alt']; ?>">
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
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer_nav',
                        'menu_id' => '',
                        'container' => false,
                        'menu_class' => '',
                        'menu_id' => '',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                    )
                );
            ?>
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
