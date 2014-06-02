<?php
/*
Template Name: Lessons
*/

get_header(); ?>

<?php get_sidebar('curriculum'); ?>

<div class="col-2" id="primary">

<div id="interior">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						<h2><?php the_title(); ?></h2>				

						<?php the_content(); ?>

<?php endwhile; ?>

<hr />

<?php wp_reset_query(); ?>

<h2 id="lesson">Lessons</h2>

<?php 
    query_posts(array( 
        'post_type' => 'lessons', 
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>
<div class="lessons clearfix">	
	<div class="lesson-number">
		<?php the_post_thumbnail(); ?>
	</div>
	
	<div class="lesson-content">
		<?php if(get_field('lesson_pdf')) { ?>
		<a href="<?php the_field('lesson_pdf'); ?>"><h4 class="red"><?php the_title(); ?></h4></a>	
		<?php } ?>
		<?php the_content(); ?>
		
		<?php if(get_field('lesson_pdf')) { ?>
		<a href="<?php the_field('lesson_pdf'); ?>" style="margin-top:0;padding-top:0;">Download the full lesson PDF</a>	
		<?php } ?>
		
	</div>

</div>		
		
<?php endwhile;?>

</div>

<?php get_sidebar ('right'); ?>

<?php get_footer(); ?>