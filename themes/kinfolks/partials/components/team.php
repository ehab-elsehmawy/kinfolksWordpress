    <!-- start team  -->
    <section class="team-section" id="<?php the_field('team_title_id'); ?>">

        <div class="container">
            <div class="main-title-wrapper">
                <h2 class="SectionTitle">
				<?php the_field('team_section_title'); ?>
                </h2>
            </div>

            <div class="team-section-blocks">
		    	<?php if( have_rows('team_members') ): ?>

                <div class="owl-carousel owl-theme">
                    <?php while ( have_rows('team_members') ) : the_row(); ?>
						
						<div class="item">
							<div class="img-wrapper">
								<img src="<?php the_sub_field('member_image'); ?>" alt="">
							</div>
							<div class="text-wrapper">
								<p class="item_text"><?php the_sub_field('member_description'); ?></p>
							</div>
						</div>
                    <?php endwhile; ?>
				</div>
                    <?php else : ?>
                        <p>No Items found.</p>
                    <?php endif; ?>            
            </div>
        </div>
    </section>
    <!-- end team -->