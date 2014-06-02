<?php
/**
 * The Footer widget areas.
 *
 * @package WordPress
 * @subpackage ABC
 * @since ABC 1.0
 */
?>

<?php
	/* The home footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'first-footer-widget-area'  )
		&& ! is_active_sidebar( 'second-footer-widget-area' )
		&& ! is_active_sidebar( 'third-footer-widget-area'  )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

<div class="col-2 clearfix drop-shadow" id="home-callout-top-bar">
	
	<div class="home-callout-top">
	<h2>featured artist</h2>	
	</div>

	<div class="home-callout-top">
	<h2>featured video</h2>
	</div>

	<div class="home-callout-top home-callout-top-last ">
	<h2>latest news</h2>
	</div>
</div>

<div>	
	<div class="home-callout">
	    <div class="home-callout-inside">
			<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
								<ul class="xoxo">
									<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
								</ul>
			<?php endif; ?>
		</div>
	</div>

	<div class="home-callout">
		<div class="home-callout-inside">
			<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
								<ul class="xoxo">
									<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
								</ul>
			<?php endif; ?>
		</div>
	</div>

	<div class="home-callout home-callout-last">
		<div class="home-callout-inside">
			<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
								<ul class="xoxo">
									<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
								</ul>
			<?php endif; ?>
		</div>
	</div>
	
</div>




