<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ABC
 * @since ABC 1.0
 */

get_header(); ?>

<?php get_sidebar('blog-left'); ?>

<div class="col-2" id="primary">
<a href="/teachers-connect"><img src="<?php bloginfo('template_url'); ?>/images/blog-mast.png" class="drop-shadow" alt="Teachers Connect" /></a>
<div id="interior">

<?php
	/* Queue the first post, that way we know
	 * what date we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>

			<h2>
<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: %s', 'twentyten' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Monthly Archives: %s', 'twentyten' ), get_the_date('F Y') ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Yearly Archives: %s', 'twentyten' ), get_the_date('Y') ); ?>
<?php else : ?>
				<?php _e( 'Blog Archives', 'twentyten' ); ?>
<?php endif; ?>
			</h2>

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

								<?php the_time('m.d.y', array('class' => 'post-date')); ?>

								<h3 class="blog-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>

									<?php the_excerpt(); ?>

							<?php comments_template( '', true ); ?>
							<hr />
			<?php endwhile; // end of the loop. ?>

</div>

<?php get_sidebar ('blog'); ?>
		
<?php get_footer(); ?>