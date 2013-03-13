<?php
/**
 * Template Name: HTML5 Animation 
 *
 *
 * @package sedona
 * @since sedona 1.0
 */

get_header(); ?>
  	<div id="wrapper">
			<div class="container">

				<?php while ( have_posts() ) : the_post(); ?>


				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

						<?php the_content(); ?>

				</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>
			</div>
		</div>

<?php get_footer(); ?>
