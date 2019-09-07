<?php 
$clients = $flex['clients'];
if(empty($clients)){return;}
?>
<section class="cl-section" id="clients-logos">
    <div class="container">
        <?php foreach($flex['clients'] as $logo){ ?>
            <div class="logo"><img src="<?php echo $logo['image']; ?>" /></div>
        <?php } ?>
    </div>
</section>