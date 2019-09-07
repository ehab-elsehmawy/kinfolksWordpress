<?php
// Theme
define('MS_THEME','Kinfolks_Theme');
define('MS_VERSION',1.0);

// Allow uploading files like svg
define('ALLOW_UNFILTERED_UPLOADS', true);

function filter_site_upload_size_limit( $size ) {
    // Set the upload size limit to 60 MB for users lacking the 'manage_options' capability.
    if ( ! current_user_can( 'manage_options' ) ) {
        // 60 MB.
        $size = 60 * 1024 * 1024;
    }
    return $size;
}
add_filter( 'upload_size_limit', 'filter_site_upload_size_limit', 20 );


// Theme Support
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

// Menus
register_nav_menus([
    'main-menu'   => 'Main Menu',
    'footer-menu' => 'Footer Menu',
]);


function ms_allow_svg_files($mimes = array()) {
  	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_action('upload_mimes', 'ms_allow_svg_files');


function ms_enq_tinymce_plugin($plugin_array){
    $plugin_array["blue_button_plugin"] =  get_template_directory_uri() . "/inc/tinymce.js";
    return $plugin_array;
}

add_filter("mce_external_plugins", "ms_enq_tinymce_plugin");


function ms_register_editor_button($buttons){
    array_push($buttons, "blue");
    return $buttons;
}

add_filter("mce_buttons", "ms_register_editor_button");



function ms_load_theme_text_domain() {
    load_theme_textdomain( 'modeso-theme', get_template_directory() . '/lang' );
}
add_action( 'after_setup_theme', 'ms_load_theme_text_domain' );