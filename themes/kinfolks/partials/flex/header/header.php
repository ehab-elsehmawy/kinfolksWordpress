<header>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="col-md-6 col-xs-12 header-text-container">
                <div class="display-4 header-text"><?php echo $flex['main_title']; ?></div>

                <div class="col-md-5 d-block d-md-none header-mockup-container">
                    <div class="header-mockup">
                        <img src="<?php echo $flex['image']; ?>" />
                    </div>
                </div>
                <?php if(!empty($flex['list'])){ ?>
                    <ul>
                        <?php foreach($flex['list'] as $list){ ?>
                            <li><i class="fas fa-check"></i><?php echo $list['name']; ?> </li>
                        <?php } ?>
                    </ul>
					<button class="btn header-button">Zur Beta-Version</button>
                <?php } ?>
            </div>
            <div class="col-md-6 d-none d-md-block header-mockup-container">
                <div class="header-mockup">
                <?php if(intval($flex['type']) === 1){ ?>
                    <img src="<?php echo $flex['image']; ?>" />
                <?php }elseif(intval($flex['type']) === 2){ ?>
                    <iframe width="100%" height="345" src="https://www.youtube.com/embed/<?php echo $flex['youtube_id']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <?php }else{ ?>
                    <?php echo $flex['embed_html']; ?>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</header>