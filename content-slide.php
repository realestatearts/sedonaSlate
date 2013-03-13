  <h1 class="pageTitle"><?php the_title(); ?></h1>
		<?php the_content(); ?>



		<div id="myCarousel" class="carousel slide">
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>


asdf

<div class="carousel-inner">
	<div class="active item">


			<?php $image1 = get_post_meta($post->ID, 'image1', false); ?>

			<?php foreach($image1 as $image1) {
				echo '<img src="'.$image1.'">asdf';
				} ?>

			<?php $content1 = get_post_meta($post->ID, 'content1', false); ?>

			<?php foreach($content1 as $content1) {
				echo ''.$content1.'</div>';
				} ?>




			<?php $image = get_post_meta($post->ID, 'image', false); ?>

			<?php foreach($image as $image) {
				echo '	<div class="item"><img src="'.$image.'">';
				} ?>

			<?php $content = get_post_meta($post->ID, 'content', false); ?>

			<?php foreach($content as $content) {
				echo ''.$content.'</div>';
				} ?>


</div>




		  <!-- Carousel nav -->
		  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
		
		
								

<?php if( get_post_meta($post->ID, 'modal', true) ) { ?>
	
	
	<!-- Button to trigger modal -->
	<a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

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
	    <button class="btn btn-primary">Save changes</button>
	  </div>
	</div>
<?php } ?>
	



	<section id="section-nav">
			<a href="../just-the-facts/" id="just-the-facts" class="button">Just the facts</a>
	</section> <!-- /#section-nav -->
