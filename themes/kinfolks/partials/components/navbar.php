<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="main-nav">
        <div class="container">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <img  class="large-logo" src="<?php the_field('logo','option'); ?>"  alt=""/>
            <img class="white-logo" src="<?php the_field('white-logo','option'); ?>"  alt=""/>
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbar">
            <?php
          $defaults = array(
            'theme_location'  => 'main-menu',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'menu_class'      => 'navbar-nav ml-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          );
          wp_nav_menu( $defaults );
        ?>
        </div>
            </div>
        </div>
    </nav>