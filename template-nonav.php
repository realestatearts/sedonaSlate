<?php
/**
 * Template Name: No Nav Bar 
 *
 *
 * @package sedona
 * @since sedona 1.0
 */

get_header(); ?>
		<div id="primary" class="content-area secondary-page">
			<div id="content" class="site-content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>


				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

						<?php the_content(); ?>

				</article><!-- #post-<?php the_ID(); ?> -->


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->

<?php get_footer(); ?>
