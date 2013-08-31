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

// Remove Wordpress and Plugins updates
add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );s