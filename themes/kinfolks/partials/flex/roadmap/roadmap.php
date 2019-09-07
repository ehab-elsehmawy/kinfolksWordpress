<?php 
$roadmaps = $flex['roadmaps'];
if(empty($roadmaps)){return;}
?>    
<section class="r-section" id="road-map">
  <div class="container">
    <h1><?php echo $flex['title']; ?></h1>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <?php $i=0; foreach($flex['roadmaps'] as $roadmap){ $i++; $name = 'roadmap_'.$i; ?>
        <li class="nav-item">
          <a class="nav-link <?php if($i === 1){echo 'active';} ?>" id="<?php echo $name; ?>-tab" data-toggle="tab" href="#<?php echo $name; ?>" role="tab" aria-controls="<?php echo $name; ?>" aria-selected="true"><?php echo $roadmap['title']; ?><span><?php echo $roadmap['date']; ?></span></a>
        </li>
      <?php } ?>

    </ul>

     
      <div class="tab-content" id="myTabContent">
        <?php $i=0; foreach($flex['roadmaps'] as $roadmap){ $i++; $name = 'roadmap_'.$i; ?>
          <div class="tab-pane fade <?php if($i === 1){echo 'show active';} ?>" id="<?php echo $name; ?>" role="tabpanel" aria-labelledby="<?php echo $name; ?>-tab">
            <?php echo $roadmap['desc']; ?>
          </div>
        <?php } ?>
      </div>
  </div>    
</section>