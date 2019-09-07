<?php
// Save acf fields
add_filter('acf/settings/save_json', 'ms_acf_json');
function ms_acf_json( $path ) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}

// Acf options pages
function ms_acf_option_pages(){

    // register sub pages
    if ( function_exists('acf_add_options_sub_page') ) {
      acf_add_options_sub_page('General');
      acf_add_options_sub_page('Footer');

    }

    // rename top level page
    if(function_exists('acf_set_options_page_menu')){
      acf_set_options_page_menu('Global Content');
    }
  
    // set top level icon globe
    add_action('admin_head', function(){
      echo '<style type="text/css">#adminmenu .toplevel_page_acf-options-general div.wp-menu-image:before { content: "\f319"; }</style>';
    });
  
    // set menu order filters
    add_filter('custom_menu_order', 'ms_acf_menu_order');
    add_filter('menu_order', 'ms_acf_menu_order', 1);
  
  }
  add_action('init', 'ms_acf_option_pages', 5);


// Reorder global item
function ms_acf_menu_order($menu_ord){
    if (!$menu_ord) return true;  
    $menu = 'acf-options-general';
    $menu_ord = array_diff($menu_ord, array($menu));
    array_splice( $menu_ord, 1, 0, array($menu) );
    return $menu_ord;
}

