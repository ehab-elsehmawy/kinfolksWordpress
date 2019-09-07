<?php get_header();
/*
*Template Name: Portfolio
*/
$tags = get_field('portfolio_tags');
?>

    <section class="c-header-section services-page">
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


<section class="c-portfolio-tabs-section">
    <div class="c-portfolio-tabs-section__wrapper">
        <div class="c-portfolio-tabs-section__tabs no-padding">
            <h2 class="subtitle"><?php the_field('p_title'); ?></h2>
            <ul class="nav nav-tabs" id="myTab" role="tablist">


                <li class="nav-item">
                    <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab"
                        aria-controls="all" aria-selected="true">ALL</a>
                </li>
				<?php if(!empty($tags)){
					foreach($tags as $tag){
						$id = 'tag_'.$tag->term_id;
				?>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#<?php echo $id; ?>" role="tab"
                        aria-controls="<?php echo $id; ?>" aria-selected="true"><?php echo $tag->name; ?></a>
                </li>
				<?php }} ?>
            </ul>
            <div class="tab-content" id="myTabContent">

            	<!-- All -->
	            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
	                <div class="row all-masonry masonry-container" data-target=".item" data-col-xs="12"
                            data-col-sm="6" data-col-md="4">
				        <?php
				        $args = array(
				            'post_type' => 'portfolio',
				            'posts_per_page' => -1,
				        );
				        $query = new WP_Query ( $args );
				        while ($query -> have_posts()): $query -> the_post();
				        ?>
	                        <div class="col">
								<?php get_template_part('partials/loop/portfolio') ?>
	                        </div>
	                    <?php endwhile; wp_reset_query(); ?>
	                </div>
	            </div>



				<?php if(!empty($tags)){
					foreach($tags as $tag){
						$id = 'tag_'.$tag->term_id;
				?>
	                <div class="tab-pane fade" id="<?php echo $id; ?>" role="tabpanel" aria-labelledby="<?php echo $id; ?>">
	                    <div class="row <?php echo $id; ?>-masonry masonry-container" data-target=".item" data-col-xs="12"
                            data-col-sm="6" data-col-md="4">
					        <?php
					        $args = array(
					            'post_type' => 'portfolio',
					            'posts_per_page' => -1,
								'tax_query' => array(
									array(
										'taxonomy' => 'portfolio-tag',
										'field'    => 'id',
										'terms'    => $tag->term_id,
									),
								),
					        );
					        $query = new WP_Query ( $args );
					        while ($query -> have_posts()): $query -> the_post();
					        ?>
		                        <div class="col">
									<?php get_template_part('partials/loop/portfolio') ?>
		                        </div>
		                    <?php endwhile; wp_reset_query(); ?>
	                    </div>
	                </div>
            	<?php }} ?>

            </div>
        </div>

    </div>
</section>
<?php get_footer(); ?>

    <script type="text/javascript">
        $(function () {

            // say we want to have only one item opened at one moment
            var opened = false;

            $('#grid >div >.uc-container').each(function (i) {

                var $item = $(this), direction;
                //direction = [$item.find(".icon-eye").attr("data-direction")];
                //direction.push($item.find(".icon-eye").attr("data-direction"));
                console.log(i)
                switch (i) {
                    case i: direction = [$item.find("span.read-more-icon").attr("data-direction")]; break;
                }
                console.log(direction)

                console.log($item.find('span.read-more-icon').attr('data-direction'));

                var pfold = $item.pfold({
                    folds: 1,
                    folddirection: direction,
                    speed: 300,
                    onEndFolding: function () { opened = false; },
                    centered: true
                });

                $item.find('span.read-more-icon').on('click', function () {

                    if (!opened) {
                        opened = true;
                        pfold.unfold();
                    }


                }).end().find('span.cancel-icon').on('click', function () {

                    pfold.fold();

                });

            });

        });
    </script>