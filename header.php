<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage ABC
 * @since ABC 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
 <script src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body <?php body_class(); ?>>

  <div id="wrapper">
    <header>
		<div class="col-1">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/images/abc-logo.png" alt="Art, Books, and Creativity" /></a>
		</div>

		<div  class="col-2" id="navigation2">
			<ul>
				<li class="nav-blue"><h3><a href="/about" <?php if ( is_page('about'))  { echo ' class="active"'; } ?>>about</a></h3></li>
				<li class="nav-red"><h3><a href="/curriculum" <?php if ( is_page('curriculum'))  { echo ' class="active"'; } ?>>curriculum</a></h3></li>
				<li class="nav-orange"><h3><a href="/multimedia" <?php if ( is_page('multimedia'))  { echo ' class="active"'; } ?>>multimedia</a></h3></li>
				<li class="nav-violet"><h3><a href="/research" <?php if ( is_page('research'))  { echo ' class="active"'; } ?>>research</a></h3></li>
				<li class="nav-green"><h3><a href="/links" <?php if ( is_page('links'))  { echo ' class="active"'; } ?>>links</a></h3></li>
			</ul>
		</div>
    </header>

    <div class="clearfix" id="main" role="main">
	
	

