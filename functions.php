<?

/*
* Remove actions
* Add a // to the start of the line to comment and enable the action by default
*/
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_filter( 'the_content', 'capital_P_dangit' );
remove_filter( 'the_title', 'capital_P_dangit' );
remove_filter( 'comment_text', 'capital_P_dangit' );
remove_filter('atom_service_url','atom_service_url_filter');
//remove_action('wp_head', 'index_rel_link');
//remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
//remove_filter('the_content', 'wptexturize');
//remove_filter('comment_text', 'wptexturize');

function custom_disable_embeds_init() {
  // Remove the REST API endpoint.
  remove_action('rest_api_init', 'wp_oembed_register_route');
  // Turn off oEmbed auto discovery.
  // Don't filter oEmbed results.
  remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
  // Remove oEmbed discovery links.
  remove_action('wp_head', 'wp_oembed_add_discovery_links');
  // Remove oEmbed-specific JavaScript from the front-end and back-end.
  remove_action('wp_head', 'wp_oembed_add_host_js');
}

add_action('init', 'custom_disable_embeds_init', 9999);

/* remove inline recent comments */
// <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style> added in the header
function remove_recent_comment_style() {
	global $wp_widget_factory;
	remove_action(
    'wp_head',
    array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' )
  );
}
add_action( 'widgets_init', 'remove_recent_comment_style' );

/* disable feeds and rss */
$feedDisabled = true;
if ($feedDisabled) :

  function disableFeed () {
    wp_die( __('No feed available,please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') );
  }

  add_action('do_feed', 'fb_disable_feed', 1);
  add_action('do_feed_rdf', 'fb_disable_feed', 1);
  add_action('do_feed_rss', 'fb_disable_feed', 1);
  add_action('do_feed_rss2', 'fb_disable_feed', 1);
  add_action('do_feed_atom', 'fb_disable_feed', 1);
  add_action('do_feed_rss2_comments', 'fb_disable_feed', 1);
  add_action('do_feed_atom_comments', 'fb_disable_feed', 1);
endif;


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

/* Add Menu Support */
add_theme_support('menus');
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/* Add Thumbnail Theme Support */
add_theme_support('post-thumbnails');
//add_image_size('large', 700, '', true); // Large Thumbnail
//add_image_size('medium', 250, '', true); // Medium Thumbnail
//add_image_size('small', 120, '', true); // Small Thumbnail
//add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
