 <!-- Carousel items -->
                  <div class="carousel-inner">
                        <div class="active item">
                                <img src="<?php echo get_post_meta($post->ID, "image", true); ?>"
                                <?php echo get_post_meta($post->ID, 'content', true); ?>
                        </div>
 
                        <?php if( get_post_meta($post->ID, 'content3', true) )  { ?>
                        <div class="item">
                                <img src="<?php echo get_post_meta($post->ID, "image2", true); ?>" />
                                <?php echo get_post_meta($post->ID, 'content2', true); ?>
                        </div>
                        <?php } ?>
                       
                        <?php if( get_post_meta($post->ID, 'content3', true) ) { ?>
                        <div class="item">
                                <img src="<?php echo get_post_meta($post->ID, "image3", true); ?>" />
                                <?php echo get_post_meta($post->ID, 'content3', true); ?>
                        </div>
                        <?php } ?>
                   
                        <?php if( get_post_meta($post->ID, 'content4', true) ) { ?>
                        <div class="item">
                                <img src="<?php echo get_post_meta($post->ID, "image4", true); ?>" />
                                <?php echo get_post_meta($post->ID, 'content4', true); ?>
                        </div>
                        <?php } ?>
 
                        <?php if( get_post_meta($post->ID, 'content5', true) ) { ?>
                        <div class="item">
                                <img src="<?php echo get_post_meta($post->ID, "image5", true); ?>" />
                                <?php echo get_post_meta($post->ID, 'content5', true); ?>
                        </div>
                        <?php } ?>
 
                        <?php if( get_post_meta($post->ID, 'content6', true) ) { ?>
                        <div class="item">
                                <img src="<?php echo get_post_meta($post->ID, "image6", true); ?>" />
                                <?php echo get_post_meta($post->ID, 'content6', true); ?>
                        </div>
                        <?php } ?>
 
                        <?php if( get_post_meta($post->ID, 'content7', true) ) { ?>
                        <div class="item">
                                <img src="<?php echo get_post_meta($post->ID, "image7", true); ?>" />
                                <?php echo get_post_meta($post->ID, 'content7', true); ?>
                        </div>
                        <?php } ?>
 
 
 
 
 
 
 
 
                    <div class="item">…</div>
                  </div>
