<?php

//adding child theme stylesheet after parent theme stylesheet
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.min.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

//obfuscating emails using email-address-encoder plugin https://encoder.till.im/guide#filtering-content
if ( function_exists( 'eae_encode_emails' ) )  {
    add_filter( 'wp_nav_menu_items', 'eae_encode_emails' );
}

//add wp_enqueue_scripts
wp_enqueue_script( 'open-children', get_stylesheet_directory_uri() . '/js/open-children.js', array ( 'jquery' ), 1.0, true);

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

//create custom post type
function sale_bikes_init() {
    $args = array(
      'label' => 'Sale Bikes',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'sale-bikes'),
        'query_var' => true,
        'menu_icon' => 'dashicons-store',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'revisions',
            'thumbnail',
            'page-attributes',)
        );
    register_post_type( 'sale-bikes', $args );
}
add_action( 'init', 'sale_bikes_init' );

// function to get thumbnail from first image from a post
function avada_child_get_first_image() {
  global $post, $posts;
  $this_img = '';

  if(has_post_thumbnail($post->id)){
    //use the featured image if the post has one
    $this_img = get_the_post_thumbnail($post->id, 'thumbnail', array('class' => 'alignleft'));
    return $this_img ;
  } else {
    //only if no featured image on the post
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.*?>/i', $post->post_content, $matches);
  	if ($output > 0){
  		$this_img = $matches[0][0];
  	}


    //return $this_img;

    //parsing src from image url
    $doc = new DOMDocument();
    $doc->loadHTML($this_img);
    $xpath = new DOMXPath($doc);
    $src = $xpath->evaluate("string(//img/@src)");

    //return $src;
    //removing hardcoded image size from url
    $src_stripped = preg_replace('/-[0-9]+x[0-9]+/', '', $src);
    //return $src_stripped;

    $img_post_id = attachment_url_to_postid($src_stripped);
    //return $img_post_id;
    $thumbnail_img = wp_get_attachment_image($img_post_id, 'thumbnail');

    //return what we have defined
    if (!empty($thumbnail_img)) {
      return $thumbnail_img . 'thumbnail_img';
    } else {
      $this_img_output = '<img class="alignleft" src="'.$src_stripped.'">';
      return $this_img_output . 'this_img_output';
    }
  }
}

// hide built-in custom fields meta box by default
add_filter('default_hidden_meta_boxes','hide_meta_box',10,2);
function hide_meta_box($hidden, $screen) {
    //make sure we are dealing with the correct screen
    if ( ('post' == $screen->base) && ('sale-bikes' == $screen->id) ){
      //lets hide everything
      $hidden = array('postcustom');
      //$hidden[] ='my_custom_meta_box';//for custom meta box, enter the id used in the add_meta_box() function.
    }
    return $hidden;
  }

//load admin css file within WordPress admin
function admin_style() {
  wp_enqueue_style('neve-child-admin-styles', get_stylesheet_directory_uri().'/neve-child-admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');


// strip $ sign from price
function avada_child_stripped_price(){
  $price = get_post_meta(get_the_ID(),'price',true);
  $price_stripped = preg_replace('/\$/', '', $price);
  $price_cleaned = '$'.$price_stripped;
  return $price_cleaned;
}

//strip ellipses from excerpt
function avada_child_strip_brackets($content) {
	return str_replace('[&hellip;]', '&hellip;', $content);
}
add_filter('the_excerpt', 'avada_child_strip_brackets');

//add classes to pagination links
add_filter('next_posts_link_attributes', 'avada_child_next_posts_link_id');
add_filter('previous_posts_link_attributes', 'avada_child_previous_posts_link_id');

function avada_child_next_posts_link_id() {
  return 'id="next-posts"';
}
function avada_child_previous_posts_link_id() {
  return 'id="previous-posts"';
}
?>
