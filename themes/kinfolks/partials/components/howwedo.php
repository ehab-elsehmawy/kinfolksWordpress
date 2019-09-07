    <!-- start process  -->
    <section class="process-section" id="<?php the_field('how_we_do_id'); ?>">
        <div class="container">
            <div class="main-title-wrapper">
                <h2 class="SectionTitle">
                <?php the_field('how_we_do_title'); ?>
                </h2>
            </div>

            <div class="process-section-blocks">
                <div class="processBG">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processBG.png" alt="">
                </div>
                <div class="process-section-blocks__item">
                    <div class="img-wrapper">
                        <img src="<?php the_field('first_how_we_do_image_background'); ?>" alt="">
                        <div class="overlay">
                            <p class="text"><?php the_field('first_how_we_do_sub_title'); ?></p>
                        </div>
                    </div>
                    <div class="text-wrapper">
                        <p class="item_text"><?php the_field('first_how_we_do_content'); ?></p>
                    </div>
                </div>
                <div class="process-section-blocks__item">
                    <div class="img-wrapper">
                        <img src="<?php the_field('second_how_we_do_image_background'); ?>" alt="">
                        <div class="overlay">
                            <p class="text"><?php the_field('second_how_we_do_sub_title'); ?></p>
                        </div>
                    </div>
                    <div class="text-wrapper">
                        <p class="item_text"><?php the_field('second_how_we_do_content'); ?></p>
                    </div>
                </div>
                <div class="process-section-blocks__item">
                    <div class="img-wrapper">
                        <img src="<?php the_field('third_how_we_do_image_background'); ?>" alt="">
                        <div class="overlay">
                            <p class="text"><?php the_field('third_how_we_do_sub_title'); ?></p>
                        </div>
                    </div>
                    <div class="text-wrapper">
                        <p class="item_text"><?php the_field('third_how_we_do_content'); ?></p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end process -->