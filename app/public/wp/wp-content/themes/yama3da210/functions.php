<?php

add_theme_support('menus');

register_sidebar(
    array(
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h4>',
      'after_title' => '</h4>',
    )
);

add_theme_support('post-thumbnails');

if (!is_admin()) {
  function register_script() {
    wp_register_script('jQuery', 'https://code.jquery.com/jquery-3.1.0.min.js', false, '3.1.0', false);
    wp_register_script('loading', get_stylesheet_directory_uri(). '/common/js/loading.js', array('jQuery'), '', ture);
    wp_register_script('hunberger', get_stylesheet_directory_uri(). '/common/js/hunberger.js', array('jQuery'), '', ture);
    wp_register_script('hunberger2', get_stylesheet_directory_uri(). '/common/js/hunberger2.js', array('jQuery'), '', ture);
    wp_register_script('scrolltop', get_stylesheet_directory_uri(). '/common/js/scrolltop.js', array('jQuery'), '', ture);
    wp_register_script('navibgcolor', get_stylesheet_directory_uri(). '/common/js/navibgcolor.js', array('jQuery'), '', ture);
    wp_register_script('cube', get_stylesheet_directory_uri(). '/common/js/cube.js', array('jQuery'), '', ture);
    wp_register_script('shadow', get_stylesheet_directory_uri(). '/common/js/shadow.js', array('jQuery'), '', ture);
    wp_register_script('hover', get_stylesheet_directory_uri(). '/common/js/hover.js', array('jQuery'), '', ture);
  }
  function add_script() {
  		register_script();
          wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.1.0.min.js');
          wp_enqueue_script('loading', get_stylesheet_directory_uri(). '/common/js/loading.js');
          wp_enqueue_script('hunberger', get_stylesheet_directory_uri(). '/common/js/hunberger.js');
          wp_enqueue_script('hunberger2', get_stylesheet_directory_uri(). '/common/js/hunberger2.js');
          wp_enqueue_script('scrolltop', get_stylesheet_directory_uri(). '/common/js/scrolltop.js');
          wp_enqueue_script('navibgcolor', get_stylesheet_directory_uri(). '/common/js/navibgcolor.js');
      if (is_front_page()) {
          wp_enqueue_script('cube', get_stylesheet_directory_uri(). '/common/js/cube.js');
      }
      if (is_page('works')) {
          wp_enqueue_script('shadow', get_stylesheet_directory_uri(). '/common/js/shadow.js');
      }
      if (is_home()) {
          wp_enqueue_script('hover', get_stylesheet_directory_uri(). '/common/js/hover.js');
      }
  }
}
add_action('wp_enqueue_scripts', 'add_script');

function add_product_type() {
  $args = array (
  'label' => 'Gallery',
  'public' => true,
  'show_in_menu' => true,
  'show_in_nav_menus' => true,
  'supports' => array('title', 'editor', 'thumbnail'),
  'has_archive' => true,
  'rewrite' => array('slug' => 'gallery'),
  );
  register_post_type('gallery', $args);
}
add_action('init', 'add_product_type');

function my_ext2type($ext2types) {
    array_push($ext2types, array('image' => array('svg', 'svgz')));
    return $ext2types;
}
add_filter('ext2type', 'my_ext2type');

function my_mime_types($mimes){
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'my_mime_types');

function my_mime_to_ext($mime_to_ext) {
    $mime_to_ext['image/svg+xml'] = 'svg';
    return $mime_to_ext;
}
add_filter('getimagesize_mimes_to_exts', 'my_mime_to_ext');



// add_action( 'init', 'create_posttype' );
// function create_posttype() {
//   register_post_type( 'Gallery',
//     array(
//       'labels' => array(
//         'name' => __('Gallery'),
//         'singular_name' => __( 'Gallery' ),
//         'show_in_nav_menus' => __( 'true' )
//       ),
//       'public' => true,
//       'has_archive' => true,
//       'rewrite' => array('slug' => 'gallery'),
//     )
//   );
// }
