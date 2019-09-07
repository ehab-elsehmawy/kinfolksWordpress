<?php
// Packages
require_once 'inc/vendor/autoload.php';

// Navwalker
require_once 'inc/class-wp-bootstrap-navwalker.php';

// Theme
require_once 'config/config-theme.php';

// Acf
require_once 'config/config-acf.php';

// Scripts & Styles
require_once 'config/config-scripts.php';

// Required Plugins
require_once 'config/config-plugins.php';

// Post types & Taxonomies
require_once 'config/config-post-types.php';

// Helpers
require_once 'config/config-helpers.php';

function reset_editor()
{
     global $_wp_post_type_features;

     $post_type="page";
     $feature = "editor";
     if ( !isset($_wp_post_type_features[$post_type]) )
     {

     }
     elseif ( isset($_wp_post_type_features[$post_type][$feature]) )
     unset($_wp_post_type_features[$post_type][$feature]);
}

add_action("init","reset_editor");