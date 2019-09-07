<?php
$ms_dir = get_stylesheet_directory_uri().'/assets/';

// CSS
function ms_enqueue_css() {
  global $ms_dir;
  $template_name = get_page_template_slug(get_the_ID());
  wp_enqueue_style('jquery-ui.min-css', $ms_dir.'css/jquery-ui.min.css', [], MS_VERSION);
  wp_enqueue_style('owl.theme.default.min.css', $ms_dir.'css/owl.theme.default.min.css', [], MS_VERSION);
  wp_enqueue_style('animate.css', $ms_dir.'css/animate.css', [], MS_VERSION);
  wp_enqueue_style('owl.carousel.min.css', $ms_dir.'css/owl.carousel.min.css', [], MS_VERSION);
  wp_enqueue_style('style-css', $ms_dir.'css/style.css', [], MS_VERSION);

}
add_action('wp_enqueue_scripts', 'ms_enqueue_css', 5);


// JS
function ms_enqueue_js() {
    global $ms_dir;
    $template_name = get_page_template_slug(get_the_ID());

    wp_enqueue_script('all.min-js', $ms_dir.'js/all.min.js', array('jquery'), MS_VERSION,true);
    wp_enqueue_script('jquery-3.1.1.min.js', $ms_dir.'js/jquery-3.1.1.min.js', array('jquery'), MS_VERSION,true);
    wp_enqueue_script('jquery-1.10.2.min.js', $ms_dir.'js/jquery-1.10.2.min.js', array('jquery'), MS_VERSION,true);
    wp_enqueue_script('jsapi', $ms_dir.'js/google-jsap.js', array('jquery'), MS_VERSION,true);
    wp_enqueue_script('bootstrap.bundle.min-js', $ms_dir.'js/bootstrap.bundle.min.js', array('jquery'), MS_VERSION,true);
    wp_enqueue_script('bootstrap.min-js', $ms_dir.'js/bootstrap.min.js', array('jquery'), MS_VERSION,true);
    wp_enqueue_script('jquery-ui.min-js', $ms_dir.'js/jquery-ui.min.js', array('jquery'), MS_VERSION,true);
    wp_enqueue_script('nicescroll.min-js', $ms_dir.'js/jquery.nicescroll.min.js', array('jquery'), MS_VERSION,true);

    wp_enqueue_script('artScript.js', $ms_dir.'js/artScript.js', array('jquery'), MS_VERSION,true);
    wp_enqueue_script('circle.js', $ms_dir.'js/circle.js', array('jquery'), MS_VERSION,true);

    // wp_enqueue_script('circletype.min.js', $ms_dir.'js/circletype.min.js', array('jquery'), MS_VERSION,true);
  
    wp_enqueue_script('owl.carousel.min.js', $ms_dir.'js/owl.carousel.min.js', array('jquery'), MS_VERSION,true);

  
    wp_enqueue_script('script-js', $ms_dir.'js/script.js', array('jquery'), MS_VERSION,true);
}
add_action('wp_enqueue_scripts', 'ms_enqueue_js', 10);
