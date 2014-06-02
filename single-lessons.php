<?php
/**
 * The Template for displaying single video posts.
 *
 * @package WordPress
 * @subpackage ABC
 * @since ABC 1.0
 *
 * @package WordPress
 * @subpackage ABC
 * @since ABC 1.0
 */

get_header(); ?>

<?php get_sidebar('curriculum'); ?>

<div class="col-2" id="primary">

<div id="interior">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						<h2><?php the_title(); ?></h2>
				
						<?php the_content(); ?>
						
						<?php if(get_field('lesson_pdf')) { ?>
						<a href="<?php the_field('lesson_pdf'); ?>">Download the full lesson PDF</a>	
						<?php } ?>

<?php endwhile; ?>

</div>
	
<?php get_sidebar ('right'); ?>

<?php get_footer(); ?>