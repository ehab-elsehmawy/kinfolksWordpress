<section class="cu-section" id="contact-us">
    <?php get_template_part( 'partials/components/map'); ?>
    <div class="cu-section-map" id="aumico_map"></div>
    <div class="cu-section-form">
        <h1><?php echo $flex['title']; ?></h1>
        <?php if(!empty($flex['info'])){ ?>
            <div class="cu-section-form__info">
                <?php foreach($flex['info'] as $info){ ?>
                    <p><?php echo $info['name']; ?></p>
                <?php } ?>
            </div>
        <?php } ?>
        <?php echo $flex['contact_shortcode']; ?>

    </div>
</section>
<style>
    #contact-us br{
        display:none;
    }
    .cu-section .cu-section-form .mar-right {
    margin-right: 2%;
}
</style>
</section>
<!-- contact section start -->
<script>
jQuery(document).ready(function() {
jQuery('.wpcf7-form').on('focus','.wpcf7-form-control',function(){
if(jQuery('.wpcf7-not-valid-tip',jQuery(this).parent()).length){
jQuery('.wpcf7-not-valid-tip',jQuery(this).parent()).remove();
//or
//jQuery('.wpcf7-not-valid-tip',jQuery(this).parent()).hide();
//or
//jQuery('.wpcf7-not-valid-tip',jQuery(this).parent()).css('display','none');
}
})

})
</script>