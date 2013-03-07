<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package sedona
 * @since sedona 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	

	<?php $songs = get_post_meta($post->ID, 'slide', false); ?>
	
	<ul class="bxslider">
	<?php foreach($songs as $song) {
	echo '<li>'.$song.'</li>';
	} ?>
	</ul>
<div class="outside">
  <h3>This div is outside of the slider</h3>
  <p><span id="slider-prev"></span> | <span id="slider-next"></span></p>
</div>


	<section id="section-nav">


			<!-- <a href="<?php $permalink = get_permalink($post->post_parent); ?>just-the-facts/" id="just-the-facts" class="button">Just the facts</a> -->
			<a href="../just-the-facts/" id="just-the-facts" class="button">Just the facts</a>
			

	</section> <!-- /#section-nav -->
</article><!-- #post-<?php the_ID(); ?> -->
