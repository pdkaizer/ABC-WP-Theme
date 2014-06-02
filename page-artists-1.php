<?php
/*
Template Name: Artist Bios
*/

get_header(); ?>

<?php get_sidebar('curriculum'); ?>

<div class="col-2" id="primary">

<div id="interior">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						<h2 class="red"><?php the_title(); ?></h2>				

						<?php the_content(); ?>

<?php endwhile; ?>

<hr />

<?php wp_reset_query(); ?>

<?php 
    query_posts(array( 
        'post_type' => 'artists',
    ) );  
?>

<?php while (have_posts()) : the_post(); ?>

<div class="lessons clearfix">	
	<div class="artist-image">
		<?php the_post_thumbnail(); ?>
	</div>
	
	<div class="artist-content">
		<h3 class="red"><?php the_content(); ?></h3>
		
		<h4><?php if(get_field('bio_pdf')) { ?>
		<a href="<?php the_field('bio_pdf'); ?>">Download the Bio</a>	
		<?php } ?></h4>
		
		<h4><?php if(get_field('image_pdf')) { ?>
		<a href="<?php the_field('image_pdf'); ?>">Download the image</a>	
		<?php } ?></h4>
		
	</div>

</div>

<?php endwhile;?>

</div>

<?php get_sidebar ('right'); ?>

<?php get_footer(); ?>