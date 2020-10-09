<?php

//adding child theme stylesheet after parent theme stylesheet
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $parent_style = 'neve-style'; // loaded in front_end.php inside the neve theme folder

    //wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.min.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.min.css',
        array( $parent_style),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style('titillium-web-google-font', 'https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;400&display=swap');
}

//obfuscating emails using email-address-encoder plugin https://encoder.till.im/guide#filtering-content
if ( function_exists( 'eae_encode_emails' ) )  {
    add_filter( 'wp_nav_menu_items', 'eae_encode_emails' );
}

//add wp_enqueue_scripts
add_action( 'wp_enqueue_scripts', 'neve_child_enqueue_scripts');

function neve_child_enqueue_scripts() {
  wp_enqueue_script( 'open-children', get_stylesheet_directory_uri() . '/js/open-children.js', array ( 'jquery' ), 1.0, true);
}

//add google analytics if not on staging or local Sites
if (!preg_match_all('#\b(localhost|devsite|stage)\b#', site_url())) {
  add_action('wp_head', 'wpb_add_googleanalytics');
  function wpb_add_googleanalytics() { ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-15294685-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-11073343-18');
    </script>
<?php
  }
}

//customize meta boxes in admin

add_action('do_meta_boxes', 'neve_child_customize_meta_boxes');

function neve_child_customize_meta_boxes(){
    remove_meta_box( 'mymetabox_revslider_0', 'page', 'normal' );
    add_meta_box('postcustom', __('Custom Fields'), 'post_custom_meta_box', 'page', 'normal', 'high');
}

?>
