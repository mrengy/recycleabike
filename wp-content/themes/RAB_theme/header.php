<?php
/**
 * @package WordPress
 * @subpackage RAB_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="description" content="Recycle-A-Bike (RAB) is a volunteer-based community organization that connects people with refurbished bikes, provides practical bike knowledge, and advocates bicycle use by safer, more confident cyclists." />
	<meta name="keywords" content="Recycle-A-Bike, Providence, Rhode Island, RI, bicycle, bike, cycling, cyclists, education, non-profit, sustainable, community" />
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/png" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>

	<link href="http://fonts.googleapis.com/css?family=Nobile:regular,italic,bold,bolditalic" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">


	<meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/rab_logo.png" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives(array('type' => 'monthly', 'format' => 'link')); ?>

	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.4.2.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.infieldlabel.min.js" type="text/javascript"></script>

	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/ie6.css" />
	<![endif]-->

	<!--[if lt IE 8]>
		<script src="<?php bloginfo('template_url'); ?>/js/supersleight.js" type="text/javascript"></script>
		<script type="text/javascript">
			$('#header').supersleight({shim: '<?php bloginfo('template_url');?>/images/transparent.gif'});
		</script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div id="header">
	<div id="header_container">
		<h1><a href="<?php bloginfo('url'); ?>"><span>Recycle-A-Bike</span></a></h1>

		<a href="http://www.recycleabike.org/archives/" class="buy">Newsletters</a>
		<?php if( is_home() ) {
			wp_nav_menu(array( 'theme_location' => 'primary-menu' ));
			} else { ?> <ul class="menu"><li><a href="<?php bloginfo('url'); ?>">Back to home</a></li></ul> <?php } ?>

	</div><!--#header_container-->

</div><!--#header-->

<div id="wrapper">
	<div id="wrapper_container">

<!-- end header -->
