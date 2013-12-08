<?

/* 
* Remove actions
* Add a // to the start of the line to comment and enable the action by default
*/
remove_action('wp_head', 'wp_shortlink_wp_head');
//remove_action('wp_head', 'index_rel_link');
//remove_action('wp_head', 'start_post_rel_link');
//remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_filter( 'the_content', 'capital_P_dangit' );
remove_filter( 'the_title', 'capital_P_dangit' );
remove_filter( 'comment_text', 'capital_P_dangit' );
//remove_filter('the_content', 'wptexturize');
//remove_filter('comment_text', 'wptexturize');
remove_filter('atom_service_url','atom_service_url_filter');

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    'before_widget' => '',
    'after_widget' => ''
  )
);

function date_post() {
  echo "hace " . human_time_diff( get_the_time('U'), current_time( 'timestamp' ) );
}

if (!isset($content_width))
  $content_width = 900;

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    //add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    //add_image_size('large', 700, '', true); // Large Thumbnail
    //add_image_size('medium', 250, '', true); // Medium Thumbnail
    //add_image_size('small', 120, '', true); // Small Thumbnail
    //add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
}