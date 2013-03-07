<?php
/**
 * sedona functions and definitions
 *
 * @package sedona
 * @since sedona 1.0
 */



/**
 * Enqueue scripts and styles
 */
function sedona_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	// wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );
	
	// if ( is_singular() && wp_attachment_is_image() ) {
	// 	wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	// }

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'sedona_scripts' );


/////////////////////////////////////////////////
////	REA ADDITIONS
/////////////////////////////////////////////////



// Custom CSS for the login page
// Create wp-login.css in your theme folder
function wpfme_loginCSS() {
	echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/wp-login.css"/>';
}
add_action('login_head', 'wpfme_loginCSS');


// Customise the footer in admin area
function wpfme_footer_admin () {
	echo 'Designed and Developed by <a href="http://www.realestatearts.com" target="_blank">REA</a>';
}
add_filter('admin_footer_text', 'wpfme_footer_admin');



//  link to next and previous pages under a parent page
// use siblings('before') and siblings('after')
function siblings($link) {
    global $post;
    $siblings = get_pages('child_of='.$post->post_parent.'&parent='.$post->post_parent.'&sort_column=menu_order');
    foreach ($siblings as $key=>$sibling){
        if ($post->ID == $sibling->ID){
            $ID = $key;
        }
    }
    $closest = array('before'=>get_permalink($siblings[$ID-1]->ID),'after'=>get_permalink($siblings[$ID+1]->ID));

    if ($link == 'before' || $link == 'after') { return $closest[$link]; } else { return $closest; }
}

add_theme_support( 'menus' );

add_theme_support( 'post-thumbnails', array( 'post', 'page' ) ); // Add it for posts