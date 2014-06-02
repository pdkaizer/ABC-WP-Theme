<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
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

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						<?php the_time('M j, Y', array('class' => 'post-date')); ?>
						
						<h2 class="blog-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

							<?php the_content(); ?>

					<?php comments_template( '', true ); ?>
					<hr />
	<?php endwhile; // end of the loop. ?>

</div>

<?php get_sidebar ('blog'); ?>
		
<?php get_footer(); ?>