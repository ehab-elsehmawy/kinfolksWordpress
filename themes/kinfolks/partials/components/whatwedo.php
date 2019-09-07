<section class="aboutUs-section" id="<?php the_field('what_we_do_id'); ?>">

<div class="container">
    <div class="main-title-wrapper">
        <h2 class="SectionTitle">
        <?php the_field('what_we_do_title'); ?>
        </h2>
    </div>

    <div class="aboutUs-section-blocks">
        <div class="aboutUs-section-blocks__item">
            <div class="title-wrapper">
                <div id="blockTitle" class="blockTitle"> <?php the_field('first_what_we_do_sub_title'); ?></div>
            </div>

            <div class="text-wrapper">
              
                <?php if( have_rows('first_what_we_do_content_list') ): ?>
                <ul class="list-unstyled">
                    <?php while ( have_rows('first_what_we_do_content_list') ) : the_row(); ?>
                        <li class="Header_text"><?php the_sub_field('first_what_we_do_text'); ?></li>
                    <?php endwhile; ?>
                </ul>
                    <?php else : ?>
                        <p>No Items found.</p>
                    <?php endif; ?>
            </div>
        </div>
        <div class="aboutUs-section-blocks__item">
            <div class="title-wrapper">
                <div class="blockTitle"> <?php the_field('second_what_we_do_sub_title'); ?></div>
            </div>

            <div class="text-wrapper">
              
                <?php if( have_rows('second_what_we_do_content_list') ): ?>
                <ul class="list-unstyled">
                    <?php while ( have_rows('second_what_we_do_content_list') ) : the_row(); ?>
                        <li class="Header_text"><?php the_sub_field('second_what_we_do_text'); ?></li>
                    <?php endwhile; ?>
                </ul>
                    <?php else : ?>
                        <p>No Items found.</p>
                    <?php endif; ?>
            </div>
        </div>
        <div class="aboutUs-section-blocks__item">
            <div class="title-wrapper">
                <div class="blockTitle"> <?php the_field('third_what_we_do_sub_title'); ?></div>
            </div>

            <div class="text-wrapper">
              
                <?php if( have_rows('third_what_we_do_content_list') ): ?>
                <ul class="list-unstyled">
                    <?php while ( have_rows('third_what_we_do_content_list') ) : the_row(); ?>
                        <li class="Header_text"><?php the_sub_field('third_what_we_do_text'); ?></li>
                    <?php endwhile; ?>
                </ul>
                    <?php else : ?>
                        <p>No Items found.</p>
                    <?php endif; ?>
            </div>
        </div>
    </div>
</div>
</section>

