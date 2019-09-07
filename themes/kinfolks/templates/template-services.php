<?php get_header();
/*
*Template Name: Services
*/
?>

<!-- inner-header section start -->
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
<!-- inner-header section end -->

<?php if(!empty(get_field('main_services'))){ ?>
<!-- start services tabs -->
<section class="c-services-tabs-section">
    <div class="c-services-tabs-section__wrapper">
		<h2 class="subtitle"><?php the_field('s_title'); ?></h2>
        <ul class="nav nav-tabs" id="services-tab" role="tablist">
            <?php $i=0; foreach(get_field('main_services') as $service){ $i++; ?>
            <li class="nav-item">
                <a class="nav-link <?php if($i === 1){echo 'active';} ?>" id="main_<?php echo $i; ?>-tab" data-toggle="tab" href="#main_<?php echo $i; ?>" role="tab" aria-controls="main_<?php echo $i; ?>"
                    aria-selected="false"><?php echo $service['name']; ?></a>
            </li>
            <?php } ?>
        </ul>



        <div class="tab-content" id="pills-tabContent">



            <?php $i=0; foreach(get_field('main_services') as $service){ $i++; ?>
                <div class="tab-pane fade <?php if($i === 1){echo 'show active';} ?>" id="<?php echo 'main_'.$i; ?>" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="services-tabs-content fadeInUp">
                        <?php foreach($service['sub_services'] as $sub_service){ ?>
                        <div class="cbp-content animated zoomIn">
                            <div>
                                <?php if($sub_service['image']){ ?>
                                    <img src="<?php echo $sub_service['image']; ?>" alt="">
                                <?php } ?>
                                <p><?php echo $sub_service['title']; ?> </p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>

        </div>


    </div>
</section>
<!-- end services tabs -->
<?php } ?>


<?php if(!empty(get_field('main_techs'))){ ?>
<!-- tecnologies section start -->
<section class="c-tecnologies-section">
    <div class="c-tecnologies-section__wrapper">
        <div class="c-tecnologies-section__title-wrapper">
            <h2 class="c-tecnologies-section__title">
                <?php the_field('t_title'); ?>
            </h2>
            <p class="c-tecnologies-section__text"><?php the_field('t_desc'); ?></p>
        </div>
        <div class="c-tecnologies-section__content-wrapper">
            <div id="content" class="main">
                <div class="filter" data-js="filtering-demo">
                    <div class="filter-button-group button-group js-radio-button-group">
                        <button class="button is-checked" data-filter="*">all</button>
                        <?php $i=0; foreach(get_field('main_techs') as $tech){ $i++; ?>
                            <button class="button" data-filter=".tech<?php echo $i; ?>"><?php echo $tech['name']; ?></button>
                        <?php } ?>
                    </div>
                    <div class="grid tech-grid">
                        <?php $i=0; foreach(get_field('main_techs') as $tech){ $i++;
                                foreach($tech['sub_techs'] as $sub_tech){
                         ?>
                            <div class="element-item tech<?php echo $i; ?>" data-category="tech<?php echo $i; ?>">
                                <div class="cbp-content">
                                    <img src="<?php echo $sub_tech['image']; ?>" alt="">
                                </div>
                            </div>
                        <?php }} ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- process section end -->
<?php } ?>


<?php if(!empty(get_field('main_proc'))){ ?>
<!-- process section start -->
<section class="c-process-section">
    <div class="c-process-section__wrapper">
        <div class="c-process-section__title-wrapper">
            <h2 class="c-process-section__title">
                <?php the_field('p_title'); ?>
            </h2>
            <p class="c-process-section__text">
                <?php the_field('p_desc'); ?></p>
        </div>
        <div class="c-process-section__content-wrapper">
            <div class="tab-wrap">
                <ul class="tab-titles list-unstyled">
                    <?php $i=0; foreach(get_field('main_proc') as $process){ $i++; ?>
                        <li <?php if($i === 1){echo 'class="active"';} ?>>
                            <a href="#process<?php echo $i; ?>">
                                <div class="image">
                                    <img src="<?php echo $process['image']; ?>" alt="" class="tab-normal-img">
                                    <img src="<?php echo $process['active_image']; ?>" alt="" class="tab-active-img">
                                </div>
                                <?php echo $process['name']; ?>
                            </a>
                        </li>
                    <?php } ?>
 
                </ul>
                <div class="container-fluid">

                    <?php $i=0; foreach(get_field('main_proc') as $process){ $i++; ?>
                        <div id="process<?php echo $i; ?>" class="tab-content" <?php if($i === 1){echo 'style="display: block;"';} ?>>
                            <div class="taglist">
                                <h4 class="sub-title"><?php echo $process['name']; ?></h4>
                                <p> <?php echo $process['desc']; ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
  
                </div>
            </div>
        </div>
    </div>
</section>
<!-- process section end -->
<?php } ?>

<?php get_footer(); ?>