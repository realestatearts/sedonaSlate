<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sedona
 * @since sedona 1.0
 */

get_header(); ?>


	<div id="main" class="site-main">
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">


				<?php while ( have_posts() ) : the_post(); ?>

				<?php if ( has_post_thumbnail() ) { ?>
				<figure id="hero-image">
					<!-- width and height attributes removed with function in functions.php -->
					<?php the_post_thumbnail( array(968,545) ); ?>
				</figure>
				<?php } ?>

					<?php get_template_part( 'content', 'page' ); ?>


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>
