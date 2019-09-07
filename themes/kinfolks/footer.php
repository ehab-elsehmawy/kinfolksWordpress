<footer class="f-section" id="<?php the_field('footer_id','option'); ?>">
        <div class="container">
            <div class="f-section-wrapper">
                <div class="f-section-title">
                    <h4><?php the_field('telephone_title','option'); ?></h4>
                </div>
                <div class="f-section-content">
                    <p><?php the_field('telephone_number','option'); ?></p>
                </div>
            </div>
            <div class="f-section-wrapper">
                <div class="f-section-title">
                    <h4><?php the_field('email_title','option'); ?></h4>
                </div>
                <div class="f-section-content">
                    <p><?php the_field('email','option'); ?></p>
                </div>
            </div>
            <div class="f-section-wrapper">
                <div class="f-section-title">
                    <h4><?php the_field('instgram_title','option'); ?></h4>
                </div>
                <div class="f-section-content">
                    <p><?php the_field('instagram','option'); ?></p>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
<?php if(!is_front_page()){ ?>
<script>
jQuery('.navbar-nav li a').click(function(){
	var target = $(this).attr('href');
	window.location.href = target;
});

</script>
<?php } ?>
</body>
</html>