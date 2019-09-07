<?php 
$features = $flex['features'];
if(empty($features)){return;}
?>
<section class="w-section" id="why-aumico">
    <div class="container">
        <h1><?php echo $flex['title']; ?></h1>
        <h5><?php echo $flex['desc']; ?></h5>

        <div class="w-section-blocks">
            <?php foreach($flex['features'] as $feat){ ?>
                <div class="w-section-blocks__item">
                    <img src="<?php echo $feat['icon']; ?>">
                    <h4><?php echo $feat['title']; ?></h4>
                    <p><?php echo $feat['desc']; ?></p>
                </div>
            <?php } ?>

        </div>
    </div>
</section>