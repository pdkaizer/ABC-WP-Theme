<?php
/*
Template Name: Videos
*/

get_header(); ?>

<?php get_sidebar(); ?>

<div class="col-2" id="primary">

<div id="interior">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						<h2 class="orange"><?php the_title(); ?></h2>				

						<?php the_content(); ?>

<?php endwhile; ?>

<?php wp_reset_query(); ?>


</div>

<?php get_sidebar ('right'); ?>

<?php get_footer(); ?>