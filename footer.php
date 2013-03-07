<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package sedona
 * @since sedona 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="social-media">
			<p>
				<a href="https://twitter.com/sedonaslate" id="twitter" target="_blank">Twitter</a>
				<a href="http://www.facebook.com/SedonaSlate/" id="facebook" target="_blank">Facebook</a>
		</div>
		<div class="site-info">
			<p>
				<a href="http://www.jbg.com/" id="jbg-link">The JBG Company</a>
				<a href="<?php bloginfo('url');?>/equal-housing-notice"><span id="equal-housing">&nbsp;</span></a>
				<a href="<?php bloginfo('url');?>/equal-housing-notice"><span id="sec508">&nbsp;</span>
				<a href="<?php bloginfo('url');?>/privacy-policy" id="privacy">Privacy Policy</a>
			</p>
		</div><!-- .site-info -->
		<div id="bug">&nbsp;</div>
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->


<!-- bxSlider Javascript file -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.min.js"></script>
<!-- nivo slider Javascript file -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>

<!-- bxSlider CSS file -->
<link href="<?php bloginfo('template_directory'); ?>/jquery.bxslider.css" rel="stylesheet" />

<script>
jQuery(document).ready(function() {

	// bxSlider script
	$j = jQuery.noConflict();
	$j(document).ready(function(){
	  $j('.bxslider').bxSlider({
	  	  nextSelector: '#slider-next',
		  prevSelector: '#slider-prev',
		  nextText: 'Onward →',
		  prevText: '← Go back'
	  });
	});

	// nivoSlider script  
	$jQ = jQuery.noConflict();
	$jQ('#slider').nivoSlider({
		directionNav: true,
		effect: 'fade',
		prevText: 'Prev', // Prev directionNav text
	nextText: 'Next',
	controlNav: false,
	animSpeed: 500, // Slide transition speed
	pauseTime: 5000
	});


});// / document ready
</script>


<?php wp_footer(); ?>
</body>
</html>
