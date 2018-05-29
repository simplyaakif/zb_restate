<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
// require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


require get_template_directory() . '/inc/mycodes.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';

/**
 * Load Redux framework.
 */
if ( file_exists( dirname( __FILE__ ) . '/admin/admin-init.php' ) ) {
    require_once dirname( __FILE__ ) . '/admin/admin-init.php';
}

function removeDemoModeLink() { // Be sure to rename this function to something more unique
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    }
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}
add_action('init', 'removeDemoModeLink');



Redux::init('redux_builder_uw_ar_restate');


// Function to add subscribe text to posts and pages
function agent_shortcode() {
    global $redux_builder_uw_ar_restate;

    $content = '<div class="container"><div class="row"><div class="col-md-4"><img style="padding:10px;" src="';

    $content .= $redux_builder_uw_ar_restate['agent_dp']['url'];

    $content .= '"></div><div class="col-md-8 bar_left"><h2>';
    
    $content .= $redux_builder_uw_ar_restate['agent_name'];
    
    $content .= '</h2><p>';
    
    $content .= $redux_builder_uw_ar_restate['agent_subname'];
    
    $content .= '</p><p>';
    
    $content .= $redux_builder_uw_ar_restate['agent_bio'];
    
    $content .= '</p>'; 

    if($redux_builder_uw_ar_restate['agent_address']){
        $content .='<p><i class="fa fa-map"></i> &nbsp; Office: '. $redux_builder_uw_ar_restate['agent_address'].'</p>';
    }

    $content .= '<ul class="list-inline text-center">';

    if($redux_builder_uw_ar_restate['agent_phone']){
        $content .='<li class="list-inline-item"><i class="fa fa-phone"></i> &nbsp;'. $redux_builder_uw_ar_restate['agent_phone'].' </li>';
    }
    
    if($redux_builder_uw_ar_restate['agent_email']){
        $content .='<li class="list-inline-item">&nbsp;<i class="fa fa-envelope"></i>&nbsp; '. $redux_builder_uw_ar_restate['agent_email'].' </li>';
    }

    if($redux_builder_uw_ar_restate['agent_website']){
        $content .='<li class="list-inline-item">&nbsp;<i class="fa fa-globe"></i>&nbsp; '. $redux_builder_uw_ar_restate['agent_website'].' </li>';
    }

    $content .= '</ul><br/>';

    $content .= '<ul class="list-inline agent_social text-center">';

    if($redux_builder_uw_ar_restate['agent_fb']){
        $content .='<li class="list-inline-item"><a href="'. $redux_builder_uw_ar_restate['agent_fb'].' "><i class="fa fa-facebook"></i></a></li>';
    }

    if($redux_builder_uw_ar_restate['agent_tw']){
        $content .='<li class="list-inline-item"><a href="'. $redux_builder_uw_ar_restate['agent_tw'].' "><i class="fa fa-twitter"></i></a></li>';
    }

    if($redux_builder_uw_ar_restate['agent_li']){
        $content .='<li class="list-inline-item"><a href="'. $redux_builder_uw_ar_restate['agent_li'].' "><i class="fa fa-linkedin"></i></a></li>';
    }

    if($redux_builder_uw_ar_restate['agent_ig']){
        $content .='<li class="list-inline-item"><a href="'. $redux_builder_uw_ar_restate['agent_ig'].' "><i class="fa fa-instagram"></i></a></li>';
    }

    if($redux_builder_uw_ar_restate['agent_ytube']){
        $content .='<li class="list-inline-item"><a href="'. $redux_builder_uw_ar_restate['agent_ytube'].' "><i class="fa fa-youtube"></i></a></li>';
    }

    $content .= '</ul><br/>';

    return $content;
}
add_shortcode('site_agent', 'agent_shortcode');



// var_dump($redux_builder_uw_ar_restate);