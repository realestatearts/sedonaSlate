<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section 
 *
 * @package sedona
 * @since sedona 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.75402.js" type="text/javascript"></script>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel='stylesheet' id='home-widgets-css'  href='<?php bloginfo('template_directory'); ?>/sedona-open-banner.css' type='text/css' media='all' />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheets/jquery.fancybox.css" />
<!--[if lt IE 9]>
<script src="<?php bloginfo('template_directory'); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!--[if lte IE 8]>
	<link rel="stylesheet" type="text/css" href="<<?php bloginfo('template_directory'); ?>/stylesheets/ie7.css" />
<![endif]-->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37367182-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<meta name="google-site-verification" content="68lAw_wQD-Vv4fxooPkOkVV5L9THxp4GZByeW72VUoQ" />
<?php wp_enqueue_script('jquery');?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
  <?php if (is_page(5) ): //no header on homepage?>
  
  <?php else : ?>
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<h2 class="site-description">1510 Clarendon Boulevard Arlington, VA 22209 <span class="tel"><!-- 1888.453.3574 --><form>
      <span id="LTSDynamicCampaignText">(999)999-9999</span>
      </form>
      <script type="text/javascript"
              src="http://popcard.ltsolutions.com/js/DynamicCampaign.js"></script>
      <script type="text/javascript">
        setDynamicCampaign('3691', 'LTSDynamicCampaignText', false, '');
        function setDynamicCampaignProcessCompleted(dynamicCampaignResponse) {
          if(dynamicCampaignResponse.successFlag == true) {
            if(dynamicCampaignResponse.controlIDUpdated == 'LTSDynamicCampaignText'){
              //grab the control from the document object
      var objControlIDUpdated =          
                   document.getElementById(dynamicCampaignResponse.controlIDUpdated);
              //you can style the formatted campaign differently
              //or perform any other action based on the campaign
      objControlIDUpdated.innerText =
                   dynamicCampaignResponse.formattedCampaign;
            }
          }
            else {
        alert(dynamicCampaignResponse.errorMessage);
         }
      }
      </script>
      </span></h2>
			</hgroup>
	</header><!-- #masthead .site-header -->

	<nav role="navigation" class="site-navigation main-navigation">
			<h1 class="assistive-text"><?php _e( 'Menu', 'sedona' ); ?></h1>
			<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'sedona' ); ?>"><?php _e( 'Skip to content', 'sedona' ); ?></a></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav><!-- .site-navigation .main-navigation -->
<?php endif; ?>
