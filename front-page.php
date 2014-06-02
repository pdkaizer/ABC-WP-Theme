<?php
/**
 * The template for displaying just the homepage.
 *
 *
 * @package WordPress
 * @subpackage ABC
 * @since ABC 1.0
 */

get_header(); ?>

<?php get_sidebar(); ?>

<div class="col-2" id="primary">

<div id="home-content">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>

<?php endwhile; ?>

</div>

<div id="home-content-blog">
	<a href="/teachers-connect"><img src="<?php bloginfo('template_url'); ?>/images/home-blog-mast.png" border="0" class="drop-shadow" alt="Home Blog Mast" /></a>
	<div id="home-blog-feature">
		
		<div class="home-post">
			<?php $temp_query = $wp_query; ?>
		    <?php query_posts('category_name=Teachers Connect&showposts=2'); ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php the_time('M j, Y', array('class' => 'home-post-date')); ?>
		  	<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?> 
			<hr />
		    <?php endwhile; ?>

		</div>
		
		
	</div>
</div>


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
							
									<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
					
			<?php endif; ?>
		</div>
	</div>

	<div class="home-callout">
		<div class="home-callout-inside">
			<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
								
									<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
								
			<?php endif; ?>
		</div>
	</div>

	<div class="home-callout home-callout-last">
		<div class="home-callout-inside">
			<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
								
									<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
							
			<?php endif; ?>
		</div>
	</div>
	
</div>


<?php get_footer(); ?>