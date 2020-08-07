<?php
/*
  REGISTERING
  AND LOADING SCRIPTS
*/

function add_theme_assets() {
  wp_enqueue_style( 'organic-icons', get_template_directory_uri(). '/dist/css/organicfoodicons.css');
  wp_enqueue_style( 'component', get_template_directory_uri(). '/dist/css/component.css');
  wp_enqueue_style( 'style', get_template_directory_uri(). '/dist/css/all.min.css');
  wp_enqueue_style( 'light-gallery', get_template_directory_uri(). '/dist/css/lightgallery.min.css');
  wp_enqueue_style( 'swipper', get_template_directory_uri(). '/dist/css/swiper.min.css');

  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/dist/js/jquery-3.4.1.min.js', array ( 'jquery' ), 1.1, true);
  // wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/dist/js/modernizr-custom.js', array ( ), 1.1, true);
  wp_enqueue_script( 'swiper', get_template_directory_uri() . '/dist/js/swiper.min.js', array ( ), 1.1, true);

  wp_enqueue_script( 'lightgallery', get_template_directory_uri() . '/dist/js/lightgallery.min.js', array ( ), 1.1, true);
  wp_enqueue_script( 'all', get_template_directory_uri() . '/dist/js/all.min.js', array ( ), 1.1, true);

  wp_enqueue_script( 'classie', get_template_directory_uri() . '/dist/js/classie.js', array ( ), 1.1, true);
  wp_enqueue_script( 'dummydata', get_template_directory_uri() . '/dist/js/dummydata.js', array ( ), 1.1, true);
  // wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/js/main.js', array ( ), 1.1, true);
  wp_enqueue_script( 'lg-thumbnail', get_template_directory_uri() . '/dist/js/lg-thumbnail.js', array ( ), 1.1, true);
  wp_enqueue_script( 'lg-fullscreen', get_template_directory_uri() . '/dist/js/lg-fullscreen.js', array ( ), 1.1, true);
  wp_enqueue_script( 'lg-fullscreen', get_template_directory_uri() . '/dist/js/lg-fullscreen.js', array ( ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_assets' );

/*
  REGISTERING
  CUSTOM POST TYPES
*/

function register_custom_post_types() {
  register_post_type( 'products',
  array(
    'labels' => array(
      'name' => __( 'Produkty' ),
      'singular_name' => __( 'Produkt' )
    ),
    'public' => true,
    'has_archive' => true,
    'taxonomies' => array ( 'category' ),
    )
  );
    register_post_type( 'softwares',
    array(
      'labels' => array(
        'name' => __( 'Oprogramowanie' ),
        'singular_name' => __( 'Oprogramowanie' )
      ),
    'public' => true,
    'has_archive' => true,
    'taxonomies' => array ( 'category' ),
      )
    );
}
add_action( 'init', 'register_custom_post_types' );
/*
  REGISTERING
  MENUS
*/

if ( ! function_exists( 'register_menus' ) ) {
    function register_menus(){
        register_nav_menus( array(
            'main_nav' => __( 'Główna nawigacja', 'text_domain' ),
            'footer_nav'  => __( 'Nawigacja w stopce', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'register_menus', 0 );
}
/* ADD CLASS 'ACTIVE' FOR ACTIVE MENU LINK */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

/* ADD CUSTOM ELEMENTS TO ANCHOR IN MAIN_NAV MENU */
function atg_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'topnav') {
    $classes[] = 'nav-link';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

function add_menu_anchor_attr($ulclass) {
   return preg_replace('/<a /', '<a itemprop="url"', $ulclass);
}
add_filter('wp_nav_menu','add_menu_anchor_attr');

/*
  SUPPORT POST THUMBNAILS
*/

add_theme_support( 'post-thumbnails' );

/*
  REGISTER CUSTOM ACF PAGES
*/

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
      'page_title' 	=> 'Główne ustawienia szablonu',
      'menu_title'	=> 'Ustawienia szablonu',
      'menu_slug' 	=> 'theme-settings',
      'parent_slug' => '',
      'capability'	=> true,
      'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
      'page_title' 	=> 'Ustawienia kategorii',
      'menu_title'	=> 'Kategoria',
      'menu_slug'   => 'theme-settings-cat',
      'parent_slug'	=> 'theme-settings',
    ));
    acf_add_options_sub_page(array(
      'page_title' 	=> 'Ustawienia stopki strony',
      'menu_title'	=> 'Footer',
      'menu_slug'   => 'theme-settings-footer',
      'parent_slug'	=> 'theme-settings',
    ));
    acf_add_options_sub_page(array(
      'page_title' 	=> 'Logotypy na stronie',
      'menu_title'	=> 'Logotypy',
      'menu_slug'   => 'theme-settings-logotype',
      'parent_slug'	=> 'theme-settings',
    ));
  }
}

/*
  ALLOW TO UPLOAD .SVG FILES
*/

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/*
  REGISTER GUTENBERG BLOCKS
*/
if (function_exists('acf_register_block_type')) {
  add_action('acf/init', 'register_acf_block_types');
}
function register_acf_block_types(){
  acf_register_block_type(
        array(
          'name' => 'main-slider',
          'title' => __('Main slider'),
          'description' => __('Duza karuzela obrazkow'),
          'render_template' => 'gutenberg-blocks/main-slider/main-slider.php',
          'icon' => 'editor-paste-text'
        )
    );
    acf_register_block_type(
        array(
          'name' => 'text-area-1',
          'title' => __('Text Area no 1'),
          'description' => __('Obszar tekstowy nr 1'),
          'render_template' => 'gutenberg-blocks/text-area-1/text-area-1.php',
          'icon' => 'editor-paste-text'
        )
    );
    acf_register_block_type(
        array(
          'name' => 'about-company',
          'title' => __('About company'),
          'description' => __('O firmie'),
          'render_template' => 'gutenberg-blocks/about-company/about-company.php',
          'icon' => 'editor-paste-text'
        )
    );
    acf_register_block_type(
      array(
        'name' => 'product-ad-left',
        'title' => __('Product Ad Left'),
        'description' => __('Reklama produktu z produktem po lewej stronie'),
        'render_template' => 'gutenberg-blocks/product-ad-left/product-ad-left.php',
        'icon' => 'editor-paste-text'
      )
    );
    acf_register_block_type(
      array(
        'name' => 'product-ad-right',
        'title' => __('Product Ad Right'),
        'description' => __('Reklama produktu z produktem po prawej stronie'),
        'render_template' => 'gutenberg-blocks/product-ad-right/product-ad-right.php',
        'icon' => 'editor-paste-text'
      )
    );
    acf_register_block_type(
      array(
        'name' => 'text-area-2',
        'title' => __('Text Area no 2'),
        'description' => __('Obszar tekstowy nr 2'),
        'render_template' => 'gutenberg-blocks/text-area-2/text-area-2.php',
        'icon' => 'editor-paste-text'
      )
  );
    acf_register_block_type(
        array(
          'name' => 'contact-form',
          'title' => __('Contact form'),
          'description' => __('Formularz kontaktowy'),
          'render_template' => 'gutenberg-blocks/contact-form/contact-form.php',
          'icon' => 'editor-paste-text'
        )
    );
    acf_register_block_type(
      array(
        'name' => 'breadcrumbs',
        'title' => __('Breadcrumbs'),
        'description' => __('Breadcrumbs'),
        'render_template' => 'gutenberg-blocks/breadcrumbs/breadcrumbs.php',
        'icon' => 'editor-paste-text'
      )
      );
      acf_register_block_type(
        array(
          'name' => 'banner',
          'title' => __('Banner'),
          'description' => __('Banner'),
          'render_template' => 'gutenberg-blocks/banner/banner.php',
          'icon' => 'editor-paste-text'
        )
        );
      acf_register_block_type(
        array(
          'name' => 'category-list',
          'title' => __('Category list'),
          'description' => __('Lista kategorii produktow'),
          'render_template' => 'gutenberg-blocks/category-list/category-list.php',
          'icon' => 'editor-paste-text'
        )
        );
    }
/*
    BREADCRUMBS
*/

/*
    ADD CUSTOM POST
    TYPES TO CATEGORY PAGE
*/
function namespace_add_custom_types( $query ) {
    if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
        $post_types = get_post_types( '', 'names' );
        $query->set( 'post_type', $post_types);
        return $query;
    }
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types');

/*
    BREADCRUMBS
*/
function the_breadcrumb(){
    $home = 'Home';
    $homeLink = get_bloginfo('url');
    echo '<section class="breadcrumb"><div class="container"><nav id="crumbs"><ol itemscope itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="' . $homeLink . '">' . '<span itemprop="name">' . $home . '</span>' . '</a></li>';
    if (is_category()) {
        $thisCat = get_category(get_query_var('cat'), false);
        $categoryName = $thisCat->name;
        $categoryLink = get_category_link($thisCat->term_id);
        $parentCatId = $thisCat->parent;
        $parentCatLink = get_category_link($parentCatId);
        $parentCatName = get_cat_name($parentCatId);
        if ($thisCat->parent != 0) {
            echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="' . $parentCatLink . '">' . '<span itemprop="name">' . $parentCatName . '</span>' . '</li></a>' ;
        }
        echo '<li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">' . single_cat_title('', false) . '</span><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
    } else if (is_single()){
        $postId = get_the_ID();
        $thisCat = get_the_category($postId);
        $categoryName = $thisCat[0]->name;
        $categoryLink = get_category_link($thisCat[0]->term_id);
        $parentCatId = $thisCat[0]->parent;
        $parentCatLink = get_category_link($parentCatId);
        $parentCatName = get_cat_name($parentCatId);
    if ($thisCat[0]->parent != 0) {
        echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="' . $parentCatLink . '">' . '<span itemprop="name">' . $parentCatName . '</span>' . '</a></li>' ;
    }
        echo '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="' . $categoryLink . '">' . '<span itemprop="name">' . $categoryName . '</span></a></li>';
    }
    if(get_field('product_name')){
        echo '<li class="active">';
        echo the_field('product_name');
        echo '</li></ol></nav></div></section>';
    }else{
        echo '</ol></nav></div></section>';
    }
}
/*
    REMOVE WPCF7 UNNECESARY ELEMS
*/
add_filter('wpcf7_form_elements', function( $content ) {
  $dom = new DOMDocument();
  $dom->preserveWhiteSpace = false;
  $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

  $xpath = new DomXPath($dom);
  $spans = $xpath->query("//span[contains(@class, 'wpcf7-form-control-wrap')]" );

  foreach ( $spans as $span ) :
    $children = $span->firstChild;
    $span->parentNode->replaceChild( $children, $span );
  endforeach;

  return $dom->saveHTML();
});
/*
    ADD CUSTOM ATTRIBS TO WPCF7
*/
add_filter( 'wpcf7_form_elements', 'customizeAttribuesForWCF7' );

function customizeAttribuesForWCF7( $content ) {
    $inputName = strpos( $content, 'name="imie"' );
    $content = substr_replace( $content, ' required="" ', $inputName, 0 );

    $inputSurname = strpos( $content, 'name="nazwisko"' );
    $content = substr_replace( $content, ' required="" ', $inputSurname, 0 );

    $inputCompany = strpos( $content, 'name="firma"' );
    $content = substr_replace( $content, ' required="" ', $inputCompany, 0 );

    $inputTown = strpos( $content, 'name="miasto"' );
    $content = substr_replace( $content, ' required="" ', $inputTown, 0 );

    $inputPhone = strpos( $content, 'name="telefon"' );
    $content = substr_replace( $content, ' required="" ', $inputPhone, 0 );

    $inputEmail = strpos( $content, 'name="email"' );
    $content = substr_replace( $content, ' required="" ', $inputEmail, 0 );

    $inputMessage = strpos( $content, 'name="wiadomosc"' );
    $content = substr_replace( $content, ' required="" ', $inputMessage, 0 );

    return $content;
}
/*
  COMING SOON...
*/
