<?php

// Register menus.
add_action('init', function() {
  register_nav_menu('header-menu', __( 'Header Menu' ));
});


// Add featured image
add_theme_support('post-thumbnails');


// Get featured image caption
function get_post_thumbnail_caption() {
  global $post;

  $thumbnail_id    = get_post_thumbnail_id($post->ID);
  if( ! $thumbnail_id ) { return false; }
  
  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

  if( $thumbnail_image && isset($thumbnail_image[0]) ) {
    return $thumbnail_image[0]->post_excerpt;
  } else {
    return false;
  }
}


// Add code highlighting
add_action('wp_enqueue_scripts', function() {
  wp_enqueue_script('highlight', get_template_directory_uri() . '/assets/js/highlight.min.js', array(), '1', true);
  wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.min.js', array(), '1', true);
});


// Remove excerpt ellipsis
add_filter('excerpt_more', function() { return false; });


// Remove hardcoded image sizes (thanks, Wordpress)
add_filter('post_thumbnail_html', 'ti_image_prep');
add_filter('the_content', 'ti_image_prep', 99);
function ti_image_prep($output) {
  $pattern = "/width=\"[0-9]*\"/"; 
  $output = preg_replace($pattern, "", $output);
  $pattern = "/height=\"[0-9]*\"/"; 
  $output = preg_replace($pattern, "", $output);
    return $output;
}