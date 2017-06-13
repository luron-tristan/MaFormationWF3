<?php

/**
 * 
 * FortySeven Street custom functions
 * 
 * @package FortySeven Street
 * 
 */

function fortyseven_street_section_enable(){
    $sections = array( 
        'one' => 'about',
        'two' => 'service',
        'three' => 'testimonials',
        'four' => 'portfolio',
        'five' => 'skills',
        'six' => 'clients',
        'seven' => 'pricing',
        'eight' => 'action',
        'nine' => 'team',
        'ten' => 'blog' 
        );
    $section_template_data = array();
    foreach($sections as $section => $value){
        $section_enable_disable = get_theme_mod( 'section_'.$section.'_enable'  , 1 );
        if( !empty($section_enable_disable) && $section_enable_disable == 1 ){
            $section_template_data[] = array(
                'section-id' => $section,
                'template-part' => $value,
                );
        } 
    }
    return $section_template_data;    
} 

function fortyseven_street_page_id( $value ){
    $post = get_post($value);
    return $post;

}

//adding class to body boxed/full-width
function fortyseven_street_bodyclass($classes){
    $classes[]= get_theme_mod('webpage_layout','fullwidth');
    return $classes;
}
add_filter('body_class','fortyseven_street_bodyclass' );

function fortyseven_street_sidebar_layout($classes){
    global $post;
    if( is_404()){
        $classes[] = ' ';
    }
    elseif(is_singular()){
        $post_class = get_post_meta( $post -> ID, 'fortyseven_street_sidebar_layout', true );
        if(empty($post_class)){
            $post_class = 'right-sidebar';
            $classes[] = $post_class;
        }
        else{
            $post_class = get_post_meta( $post -> ID, 'fortyseven_street_sidebar_layout', true );
            $classes[] = $post_class;
        }
    }else{
        $classes[] = 'right-sidebar';   
    }
    return $classes;
}
add_filter('body_class', 'fortyseven_street_sidebar_layout');

function fortyseven_street_is_slider_active($classes){
    if(is_home() || is_front_page() || is_page_template('template-boxedhome.php') || is_page_template('template-header-layouts.php') ){
        if( get_theme_mod('slider_option','1') != '1') { 
            $classes[] = 'yes-slider';
        }else{
            $classes[] = 'no-slider';
        }
    }else{
        $classes[] = 'no-slider';
    }
    return $classes;
}
add_filter('body_class', 'fortyseven_street_is_slider_active');

function fortyseven_street_get_attachment_id_from_url( $attachment_url = '' ) {

    global $wpdb;
    $attachment_id = false;

    // If there is no url, return.
    if ( '' == $attachment_url )
        return;

    // Get the upload directory paths
    $upload_dir_paths = wp_upload_dir();

    // Make sure the upload path base directory exists in the attachment URL, to verify that we're working with a media library image
    if ( false !== strpos( $attachment_url , $upload_dir_paths['baseurl'] ) ) {

        // If this is the URL of an auto-generated thumbnail, get the URL of the original image
        $attachment_url = preg_replace( '/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $attachment_url );

        // Remove the upload path base directory from the attachment URL
        $attachment_url = str_replace( $upload_dir_paths['baseurl'] . '/', '', $attachment_url );

        // Finally, run a custom database query to get the attachment ID from the modified attachment URL
        $attachment_id = $wpdb->get_var( $wpdb->prepare( "SELECT wposts.ID FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta WHERE wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = '_wp_attached_file' AND wpostmeta.meta_value = '%s' AND wposts.post_type = 'attachment'", $attachment_url ) );

    }

    return $attachment_id;
}


/** Plugin Install ***/
function fortyseven_street_required_plugins() {

/**
* Array of plugin arrays. Required keys are name and slug.
* If the source is NOT from the .org repo, then source is also required.
*/
$plugins = array(
    array(
        'name'      => 'Ultimate Form Builder Lite',
        'slug'      => 'ultimate-form-builder-lite',
        'required'  => false,        
        'force_activation'   => false,
        'force_deactivation' => false,
        ),
    array(
        'name'      => 'Easy Pricing Tables',
        'slug'      => 'easy-pricing-tables',
        'required'  => false,
        'force_activation'   => false,
        'force_deactivation' => true,
        ),
    array(
        'name'      => '8 Degree Coming Soon Page',
        'slug'      => '8-degree-coming-soon-page',
        'required'  => false,
        'force_activation'   => false,
        'force_deactivation' => true,
        )
    );

    /**
    * Array of configuration settings. Amend each line as needed.
    * If you want the default strings to be available under your own theme domain,
    * leave the strings uncommented.
    * Some of the strings are added into a sprintf, so see the comments at the
    * end of each line for what each argument will be.
    */
    $config = array(
        'default_path' => '',
        'menu'         => 'fortyseven-street-install-plugins',
        'has_notices'  => true,
        'dismissable'  => true,
        'dismiss_msg'  => '',
        'is_automatic' => true,
        'message'      => '',
        'strings'      => array(
            'page_title'                      => __( 'Install Recommended Plugins', 'fortyseven-street' ),
            'menu_title'                      => __( 'Install Plugins', 'fortyseven-street' ),
            'installing'                      => __( 'Installing Plugin: %s', 'fortyseven-street' ),
            'oops'                            => __( 'Something went wrong with the plugin API.', 'fortyseven-street' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.','fortyseven-street' ),
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.','fortyseven-street' ),
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.','fortyseven-street' ),
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.','fortyseven-street' ),
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.','fortyseven-street' ),
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.','fortyseven-street' ),
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.','fortyseven-street' ),
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.','fortyseven-street' ),
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins','fortyseven-street' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins','fortyseven-street' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'fortyseven-street' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'fortyseven-street' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'fortyseven-street' ),
            'nag_type'                        => 'updated'
            )
        );

    tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'fortyseven_street_required_plugins' );

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

function fortyseven_street_wrapper_start() {
    echo '<div class="ed-container"><div id="primary" class="right-sidebar">';
}
add_action('woocommerce_before_main_content', 'fortyseven_street_wrapper_start', 10);

function fortyseven_street_wrapper_end() {
    echo '</div>';
    do_action( 'woocommerce_sidebar' );
    echo '</div>';
}
add_action('woocommerce_after_main_content','fortyseven_street_wrapper_end',9);

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 8;' ), 20 );