<?php
/**
 * Template Name: BX Slider
 *
 *
 * @package sedona
 * @since sedona 1.0
 */

get_header(); ?>


	<div id="main" class="site-main">
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">


				<?php while ( have_posts() ) : the_post(); ?>



					<?php get_template_part( 'content', 'bx' ); ?>


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>
