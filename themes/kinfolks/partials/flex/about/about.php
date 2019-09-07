<?php 
$team_members = $flex['team_members'];
if(empty($team_members)){return;}
?>
<section class="a-section" id="about-us">
    <div class="container">
        <h1><?php echo $flex['title']; ?></h1>
        <h5><?php echo $flex['desc']; ?></h5>
        <div class="a-section-members">

            <?php foreach($flex['team_members'] as $member_id){ ?>
                <div class="a-section-members__item">
					<div class="member-image">
                    	<img src="<?php echo get_the_post_thumbnail_url($member_id); ?>">
					</div>
                    <div class="member-name"><?php echo get_the_title($member_id); ?></div>
                    <div class="member-position"><?php the_field('role',$member_id); ?></div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>