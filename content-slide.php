
		<?php the_content(); ?>



		<div id="myCarousel" class="carousel slide">
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

<!-- Carousel items -->
      <div class="carousel-inner contentSlide">
            <div class="active item">
                    <div class="nivo-caption"><?php echo get_post_meta($post->ID, 'caption', true); ?></div>
                    <img src="<?php echo get_post_meta($post->ID, "image", true); ?>">
                    <div class="entry-content"><?php echo get_post_meta($post->ID, 'content', true); ?></a></div>
            </div>

            <?php if( get_post_meta($post->ID, 'content2', true) )  { ?>
            <div class="item">
                   <div class="nivo-caption"><?php echo get_post_meta($post->ID, 'caption2', true); ?></div>
                   <img src="<?php echo get_post_meta($post->ID, "image2", true); ?>" />
                    <div class="entry-content"><?php echo get_post_meta($post->ID, 'content2', true); ?></a></div>
            </div>
            <?php } ?>
           
            <?php if( get_post_meta($post->ID, 'content3', true) ) { ?>
            <div class="item">
                  <div class="nivo-caption"><?php echo get_post_meta($post->ID, 'caption3', true); ?></div>
                  <img src="<?php echo get_post_meta($post->ID, "image3", true); ?>" />
                    <div class="entry-content"><?php echo get_post_meta($post->ID, 'content3', true); ?></a></div>
            </div>
            <?php } ?>
       
            <?php if( get_post_meta($post->ID, 'content4', true) ) { ?>
            <div class="item">
                  <div class="nivo-caption"><?php echo get_post_meta($post->ID, 'caption4', true); ?></div>
                    <img src="<?php echo get_post_meta($post->ID, "image4", true); ?>" />
                    <div class="entry-content"><?php echo get_post_meta($post->ID, 'content4', true); ?></a></div>
            </div>
            <?php } ?>

            <?php if( get_post_meta($post->ID, 'content5', true) ) { ?>
            <div class="item">
                  <div class="nivo-caption"><?php echo get_post_meta($post->ID, 'caption5', true); ?></div>
                    <img src="<?php echo get_post_meta($post->ID, "image5", true); ?>" />
                    <div class="entry-content"><?php echo get_post_meta($post->ID, 'content5', true); ?></a></div>
            </div>
            <?php } ?>

            <?php if( get_post_meta($post->ID, 'content6', true) ) { ?>
            <div class="item">
                  <div class="nivo-caption"><?php echo get_post_meta($post->ID, 'caption6', true); ?></div>
                    <img src="<?php echo get_post_meta($post->ID, "image6", true); ?>" />
                    <div class="entry-content"><?php echo get_post_meta($post->ID, 'content6', true); ?></a></div>
            </div>
            <?php } ?>

            <?php if( get_post_meta($post->ID, 'content7', true) ) { ?>
            <div class="item">
                  <div class="nivo-caption"><?php echo get_post_meta($post->ID, 'caption7', true); ?></div>
                    <img src="<?php echo get_post_meta($post->ID, "image7", true); ?>" />
                    <div class="entry-content"><?php echo get_post_meta($post->ID, 'content7', true); ?></a></div>
            </div>
            <?php } ?>
		</div>



		  <!-- Carousel nav -->
		  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>

		
		
								

<?php if( get_post_meta($post->ID, 'modal', true) ) { ?>
	
	
	<!-- Button to trigger modal -->
    <section id="section-nav">
            <a href="#myModal" id="just-the-facts" class="button" data-toggle="modal">Just the facts</a>
    </section> 
	<!-- Modal -->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="myModalLabel">Modal header</h3>
	  </div>
	  <div class="modal-body">
	    <p><?php echo get_post_meta($post->ID, 'modal', true); ?></p>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	  </div>
	</div>
<?php } ?>
	
