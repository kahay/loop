<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Part of front end and backend (WordPress part) was created by kamilbartusik.pl -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loop - Kasy Fiskalne, komputery POS, oprogramowanie do gastronomii</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_home_url(); ?>/wp-content/themes/loop_template/dist/images/browser/apple-touch-icon.png">
    <meta name="author" content="Kamil Bartusik, Katarzyna Górska">
    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_home_url(); ?>/wp-content/themes/loop_template/dist/images/browser/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_home_url(); ?>/wp-content/themes/loop_template/dist/images/browser/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_home_url(); ?>/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
    <!-- facebook -->
    <meta property="og:image:width" content="1099">
    <meta property="og:image:height" content="575">
    <meta property="og:title" content="Loop - kasy fiskalne, komputery POS, oprogramowanie do gastronomii, terminale płanicze, drukarki bonowe">
    <meta property="og:description" content="Wdrażanie system&oacute;w wspierających sprzedaż i kontrolę magazyn&oacute;w/pracownik&oacute;w w restauracjach, pubach, kawiarniach. Sprzedaż urządzeń fiskalnych.">
    <meta property="og:image" content="<?php echo get_home_url(); ?>/wp-content/themes/loop_template/dist/images/browser/og-image.jpg">
    <meta property="og:url" content="https://www.facebook.com/posloop/">
    <script src="<?php echo get_home_url(); ?>/wp-content/themes/loop_template/dist/js/modernizr-custom.js"></script>
    <script src="<?php echo get_home_url(); ?>/wp-content/themes/loop_template/dist/js/main.js"></script>

    <script type='application/ld+json'> 
        {
        "@context": "http://www.schema.org",
        "@type": "ComputerStore",
        "name": "Loop",
        "url": "http://pos-loop.pl/",
        "logo": "<?php echo get_field('logo_desktop', 'options')['url']; ?>",
        "image": "http://pos-loop.pl/dist/images/k10_orange04.jpg",
        "description": "Kasy fiskalne, komputery POS, oprogramowanie do gastronomii, terminale płanicze, drukarki bonowe",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Jana Sas-Zubrzyckiego, 3/55",
            "addressLocality": "Kraków",
            "addressRegion": "Małopolskie",
            "postalCode": "30-611",
            "addressCountry": "Polska"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "50.018400",
            "longitude": "19.949720"
        },
        "openingHours": "Mo, Tu, We, Th, Fr 09:00-17:00",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "792880991"
        },
        "telephone": "792880991",
        "priceRange": "0,59zł-5100zł",
        "email": "biuro@pos-loop.pl"

        }
        </script>

</head>
<body itemscope itemtype="http://schema.org/WebPage">
    <!-- Main container -->
    <div class="container">
        <!-- Blueprint header -->
        <div class="top__bar">
            <img src="<?php echo get_field('logo_mobile', 'options')['url']; ?>" alt="<?php echo get_field('logo_mobile', 'options')['alt'] ?>">
            <button class="action action--open" aria-label="Open Menu"><span class="icon icon--menu"></span></button>
        </div>
            <nav id="ml-menu" class="menu">
                <button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>

            <div class="menu__wrap">
                <ul data-menu="main" class="menu__level" tabindex="-1" role="menu" aria-label="All">
                    <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1" aria-owns="submenu-1" href="#">Kasy i drukarki fiskalne ONLINE</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-2" aria-owns="submenu-2" href="#">Kasy i drukarki fiskalne</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-3" aria-owns="submenu-3" href="#">Urządzenia niefiskalne</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Terminale płatnicze</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Przywoływacz kelnerski</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Oprogramowanie</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="/contact.php">Kontakt</a></li>
                    <?php
                        $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
                                                                    // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);

                         $menuID = $menuLocations['main_nav']; // Get the *primary* menu ID

                         $primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.
                          foreach ( $primaryNav as $navItem ) {
                                  
                              if($navItem->post_parent === 0){ ?>
                                <li class="menu__item" role="menuitem">
                                    <a class="menu__link" data-submenu="submenu-1" aria-owns="submenu-1" href="<?php echo $navItem->url; ?>">
                                        <?php echo $navItem->title ?>
                                    </a>
                                </li>
                              <?php }
                          }
                    ?>

                </ul>
                <!-- Submenu 1 -->
                <ul data-menu="submenu-1" id="submenu-1" class="menu__level" tabindex="-1" role="menu" aria-label="Vegetables">
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Kasy mobilne ONLINE</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Kasy małe ONLINE</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Kasy średnie ONLINE</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Kasy specjalizowane ONLINE</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Drukarki sklepowe ONLINE</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Drukarki apteczne ONLINE</a></li>

                </ul>
                <!-- Submenu 2 -->
                <ul data-menu="submenu-2" id="submenu-2" class="menu__level" tabindex="-1" role="menu" aria-label="Fruits">
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Kasy mobilne</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Kasy małe</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Kasy średnie</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Kasy systemowe</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Kasy specjalizowane</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Drukarki mobilne</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Drukarki sklepowe</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Drukarki apteczne</a></li>
                </ul>

                <!-- Submenu 3 -->
                <ul data-menu="submenu-3" id="submenu-3" class="menu__level" tabindex="-1" role="menu" aria-label="Grains">
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Pos i programy</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Kody kreskowe</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Wagi elektroniczne</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Szufldy</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Drukarki paragonowe</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Materiały eksploatacyjne</a></li>
                    <li class="menu__item" role="menuitem"><a class="menu__link" href="#">Akcesoria</a></li>
                </ul>
            </div>
        </nav>
        <!-- <div class="content">
            <p class="info">Please choose a category</p> -->
            <!-- Ajax loaded content here -->
        <!-- </div> -->
    </div>
    <!-- /view -->  
<nav class="md-visible" itemscope itemtype="http://schema.org/SiteNavigationElement">
    <a href="<?php echo get_home_url(); ?>">
        <img src="<?php echo get_field('logo_desktop', 'options')['url']; ?>" alt="<?php echo get_field('logo_desktop', 'options')['alt'] ?>">
    </a>
    <?php
        wp_nav_menu(
            array(
            'theme_location' => 'main_nav',
            'container' => false,
            'menu_class' => '',
            'menu_id' => '',
            'link_before' => '<span itemprop="name">',
            'link_after' => '</span>'
            )
        );
    ?>
</nav>
