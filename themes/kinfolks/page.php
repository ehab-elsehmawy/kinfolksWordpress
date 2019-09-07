<?php get_header(); the_post(); ?>
<div id="main">
    <div class="container">
       <h1><?php the_title(); ?></h1>
       <?php the_content(); ?>
    </div>
</div>
<?php get_footer(); ?>