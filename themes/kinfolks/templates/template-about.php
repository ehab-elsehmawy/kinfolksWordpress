<?php get_header();
/*
*Template Name: About
*/
?>

<!-- inner-header section start -->
    <section class="c-header-section">
        <div class="container-fluid">
            <div class="c-header-section__wrapper">
                <div class="c-header-section__content">
                <div class="email">
                    <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
                </div>
                <div class="c-header-section__title">
                    <p>
                        <?php the_field('title'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- inner-header section end -->

<?php if(!empty(get_field('team_members'))){ ?>
<!-- why modeso start -->
<section class="c-team-section">
    <div class="c-team-section__content-wrapper">
		<?php foreach(get_field('team_members') as $mem_id){ ?>
	        <div class="c-team-section__item" style="background-image: url(<?php echo get_the_post_thumbnail_url($mem_id); ?>)">
	            <div class="overlay">
	                <div class="c-team-section__content">
	                    <div class="title">
	                        <h2><?php echo get_the_title($mem_id); ?></h2>
	                    </div>
	                    <p class="text">
	                        <?php the_field('job_title',$mem_id); ?></p>
	                </div>
	            </div>
	        </div>
    	<?php } ?>

<!--         <div class="read-more downArrow">
            <span class="read-more-icon"></span>
        </div> -->


    </div>
</section>
<!-- why modeso end -->
<?php } ?>

<?php if(!empty(get_field('jobs'))){ ?>
<!-- work at modeso start -->
<section class="c-works-at-modeso-section">
    <div class="c-works-at-modeso-section__wrapper">
        <div class="c-works-at-modeso-section__title-wrapper">
            <h2 class="c-works-at-modeso-section__title">
                <?php the_field('j_title'); ?>
            </h2>
            <p class="c-works-at-modeso-section__text">
				<?php the_field('desc'); ?>
            </p>
        </div>
        <div class="c-works-at-modeso-section__content-wrapper">
            <div class="accordion" id="accordionExample">

				<?php $i=0; foreach(get_field('jobs') as $job){ $i++; ?>
	                <div class="card">
	                    <div class="card-header c-works-at-modeso-section__jobs-item" id="<?php echo 'job'.$i; ?>">
	                        <div class="row">
	                            <div class="col">
	                                <h2 class="job-title"><?php echo $job['job_title']; ?> </h2>
	                            </div>
	                            <div class="col">
	                                <p class="job-position"><?php echo $job['place_type']; ?></p>
	                            </div>
	                            <div class="col col-btn">
	                                <a class="btn btn-primary accordion-toggle"
	                                    data-toggle="collapse" data-target="#<?php echo 'job_'.$i; ?>" aria-expanded="false"
	                                    aria-controls="<?php echo 'job_'.$i; ?>"><?php echo __('open','modeso-theme'); ?></a>
	                            </div>
	                        </div>
	                    </div>
	                    <div id="<?php echo 'job_'.$i; ?>" class="collapse" aria-labelledby="<?php echo 'job'.$i; ?>"
	                        data-parent="#accordionExample">
	                        <div class="card-body">
	                            <a class="btn btn-link collapsed accordion-toggle" data-toggle="collapse" data-target="#<?php echo 'job_'.$i; ?>"
	                                aria-expanded="false" aria-controls="<?php echo 'job_'.$i; ?>"><img
	                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/close-copy@3x.png" alt=""></a>
	                            <h2 class="panel-title"><?php echo $job['job_title']; ?> </h2>

	                            <?php if(!empty($job['qualifications'])){ 
	                            		foreach($job['qualifications'] as $job_q){
	                            ?>
		                            <h4 class="panel-sub-title"> <?php echo $job_q['title']; ?></h4>
		                            <ul class="list-unstyled">
		                            	<?php if(!empty($job_q['skills'])){
		                            		foreach($job_q['skills'] as $skill){
		                            	 ?>
		                                <li class="panel-text"><?php echo $skill['skill']; ?></li>
		                                <?php }} ?>
		                            </ul>
		                            <?php } ?>
								<?php } ?>


	                            <a href="mailto:<?php the_field('email_to_apply_to'); ?>" class="btn btn-secondrary"><?php echo __('Apply','modeso-theme'); ?></a>
	                        </div>
	                    </div>
	                </div>
            	<?php } ?>

            </div>
        </div>
    </div>
</section>
<!-- work at modeso end -->
<?php } ?>

<?php get_footer(); ?>