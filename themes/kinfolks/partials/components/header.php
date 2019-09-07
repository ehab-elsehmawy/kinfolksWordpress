<header>
        <div class="jumbotron jumbotron-fluid">
            <div class="jumbotron__wrapper"></div>
            <div class="circle">
                <div class="circle__inner">
                    <div class="circle__wrapper">
                        <h1 class="circle__content"> <?php the_field('first_title'); ?> </br>  <?php the_field('second_title'); ?></br>  <?php the_field('third_title'); ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 ml-auto" id="<?php the_field('section_id'); ?>">
            <div class="Header_title_wrapper">
                <div class="Header_title" id="curved1"><?php the_field('about_us_section_title'); ?></div>
            </div>
        </div>
        <div class="col-md-10 ml-auto">
            <div class="Header-text-content_Wrapper">
                <div class="row">
                    <div class="col-sm col-md-6 slogin">
                        <div class="content_wrapper">
                            <h5 class="small-title"><?php the_field('our_motto_title'); ?> </h5>
                            <p class="text"><?php the_field('our_motto_text'); ?> </p>
                        </div>
                    </div>
                    <div class="col-sm col-md-6">
                        <p class="Header_text"><?php the_field('about_us_section_content'); ?> </p>
                    </div>
                </div>
            </div>
        </div>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-sidCircle.png" alt="" class="img-thumbinal sideImage">
    </header>