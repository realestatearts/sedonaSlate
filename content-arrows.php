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
	<nav id="previous-and-next-pages">

		<?php 
		$thisPage = get_permalink($post->ID);
		$sibPage = siblings('before');

		if( $sibPage !== $thisPage ){?>
			<a href="<?php echo siblings('before'); ?>" class="prev-page" title="Previous">Previous page</a>
		<?php } ?>

			<a href="<?php echo siblings('after'); ?>" class="next-page" title="Next">Next Page</a>
	</nav>
	<section id="section-nav">

		<?php /* Creates a menu for pages beneath the level of the current page */
			if (is_page() and ($notfound != '1')) {
				$current_page = $post->ID;
				while($current_page) {
				$page_query = $wpdb->get_row("SELECT ID, post_title, post_status, post_parent FROM $wpdb->posts WHERE ID = '$current_page'");
				$current_page = $page_query->post_parent;
			}

			$parent_id = $page_query->ID;
			$parent_title = $page_query->post_title;

			if ($wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = '$parent_id' AND post_status != 'attachment'")) { ?>

				<ul id="sibling-pages">
					<li>
						<a href="<?php echo get_permalink($parent_id); ?>" 
							<?php if( $parent_id == $post->ID ){ echo " class='current'"; } ?> >
							<?php echo $parent_title; ?>
						</a>
					</li>
				<?php wp_list_pages('sort_column=menu_order&title_li=&child_of='. $parent_id); ?>
				</ul>

			<!-- <a href="<?php $permalink = get_permalink($post->post_parent); ?>just-the-facts/" id="just-the-facts" class="button">Just the facts</a> -->
			<a href="../just-the-facts/" id="just-the-facts" class="button">Just the facts</a>
			
			<a href="<?php bloginfo('url'); ?>/neighborhood/map-directions/" id="map-link" class="button">View the map</a>

		<?php } } ?>
	</section> <!-- /#section-nav -->
</article><!-- #post-<?php the_ID(); ?> -->
