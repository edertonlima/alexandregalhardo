<?php
/**
 * @package WordPress
 * @subpackage My Web
 * @since My web Site 1.0
 **
 */
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
	
	<link rel="stylesheet" id="archi-style-css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" type="text/css" media="all">
	
	<!-- JQUERY -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
	<script type="text/javascript">
		jQuery.noConflict();
	</script>

	<!-- CARROUSEL -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript">
		jQuery(function(){
			jQuery('#depoimento').owlCarousel({
			    loop:true,
			    nav:true,
			    items: 1,
			    mouseDrag: false,
			    touchDrag: false,
			    navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"]
			})
		})
	</script>

</head>

<body <?php body_class(); ?>>

<header>
	<div class="container">
		<div class="row">			
			<div class="col-12">			
				<h1>
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
						<span class="font-light">PHOTOGRAPHY - VIDEOMAKER</span>
					</a>
				</h1>
			</div>			
		</div>
	</div>

	<?php wp_nav_menu(); ?>
	
</header>	