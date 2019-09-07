<?php 
$social = get_field('social','option');
if(empty($social)){return;}
?>

    <?php foreach($social as $soc){ ?>
    	<a target="_blank" href="<?php echo $soc['link']; ?>"><i class="fab <?php echo $soc['social_media']; ?>"></i></a>
    <?php } ?>
